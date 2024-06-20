<?php
namespace app\controllers;

use app\models\Order;
use app\models\OrderItem;
use Yii;
use app\models\Product;
use app\models\ShoppingCartItem;
use yii\web\NotFoundHttpException;

class ShoppingCartController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $items = ShoppingCartItem::find()->all();
        $totalPrice = 0;
        foreach ($items as $item) {
            $totalPrice += $item->price * $item->quantity;
        }
        return $this->render('index', [
            'items' => $items,
            'totalPrice' => $totalPrice,
        ]);
    }

    public function actionAdd($id)
    {
        $product = Product::findOne($id);

        if (!$product) {
            throw new NotFoundHttpException('Product not found');
        }

        $existingCartItem = ShoppingCartItem::findOne([
            'product_id' => $product->id,
            'user_id' => Yii::$app->user->id,
        ]);

        if ($existingCartItem) {
            Yii::$app->session->setFlash('error', 'This item is already in your cart.');
            return $this->redirect(['shopping-cart/index']);
        }

        $shoppingCart = new ShoppingCartItem();
        $shoppingCart->product_id = $product->id;
        $shoppingCart->id = $product->id;
        $shoppingCart->user_id = Yii::$app->user->id;
        $shoppingCart->name = $product->name;
        $shoppingCart->price = $product->price;
        $shoppingCart->color = $product->color;
        $shoppingCart->size = $product->size;
        $shoppingCart->quantity = $product->quantity ?? 1;

        if ($shoppingCart->save()) {
            // Redirect or display a success message
            return $this->redirect(['shopping-cart/index']);
        } else {
            // Handle errors
            return $this->render('add', ['model' => $shoppingCart]);
        }
    }

    public function actionCheckout()
    {
        $cartItems = ShoppingCartItem::findAll(['user_id' => Yii::$app->user->id]);

        if (empty($cartItems)) {
            Yii::$app->session->setFlash('error', 'Your cart is empty.');
            return $this->redirect(['shopping-cart/index']);
        }

        $transaction = Yii::$app->db->beginTransaction();
        try {
            $order = new Order();
            $order->user_id = Yii::$app->user->id;
            $order->total_price = array_sum(array_map(function ($item) {
                return $item->price * $item->quantity;
            }, $cartItems));
            $order->save();

            foreach ($cartItems as $cartItem) {
                $orderItem = new OrderItem();
                $orderItem->order_id = $order->id;
                $orderItem->product_id = $cartItem->product_id;
                $orderItem->quantity = $cartItem->quantity;
                $orderItem->price = $cartItem->price;
                $orderItem->save();

                // Optionally clear the cart
                $cartItem->delete();
            }

            $transaction->commit();
            Yii::$app->session->setFlash('success', 'Order placed successfully.');
            return $this->redirect(['site/info']);
        } catch (\Exception $e) {
            $transaction->rollBack();
            Yii::$app->session->setFlash('error', 'Failed to place the order.');
            return $this->redirect(['shopping-cart/index']);
        }
    }


    public function actionRemove($index)
    {
        $item = ShoppingCartItem::findOne($index);
        if ($item) {
            $item->delete();
        }
        return $this->redirect(['index']);
    }
}