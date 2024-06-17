<?php
namespace app\controllers;

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

    public function actionRemove($index)
    {
        $item = ShoppingCartItem::findOne($index);
        if ($item) {
            $item->delete();
        }
        return $this->redirect(['index']);
    }
}