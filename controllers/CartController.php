<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Cart;

class CartController extends Controller
{
    public function actionIndex()
    {
        $products = Cart::find()->all();
        $total = 0;
        foreach ($products as $product) {
            $total += $product->quantity * $product->product->price;
        }

        return $this->render('store', [
            'cart' => $product,
            'total' => $total,
        ]);
    }

    public function actionAdd($id)
    {
        $product = Cart::findOne(['product_id' => $id]);
        if ($product) {
            $product->quantity++;
        } else {
            $product = new Cart();
            $product->product_id = $id;
            $product->quantity = 1;
        }
        $product->save();

        return $this->redirect(['index']);
    }

    public function actionRemove($id)
    {
        $cart = Cart::findOne(['product_id' => $id]);
        if ($cart) {
            if ($cart->quantity > 1) {
                $cart->quantity--;
            } else {
                $cart->delete();
            }
            $cart->save();
        }

        return $this->redirect(['index']);
    }
}