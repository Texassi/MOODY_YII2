<?php

namespace app\controllers;

use app\models\LikeItem;
use app\models\Product;
use Yii;
use yii\web\NotFoundHttpException;

class LikeController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $items = LikeItem::find()->all();

        return $this->render('index', [
            'items' => $items,
        ]);
    }

    public function actionAdd($id)
    {
        $product = Product::findOne($id);

        if (!$product) {
            throw new NotFoundHttpException('Product not found');
        }

        $existingCartItem = LikeItem::findOne([
            'product_id' => $product->id,
            'user_id' => Yii::$app->user->id,
        ]);

        if ($existingCartItem) {
            Yii::$app->session->setFlash('error', 'You already have this product in your favorites.');
            return $this->redirect(['like/index']);
        }

        $shoppingCart = new LikeItem();
        $shoppingCart->product_id = $product->id;
        $shoppingCart->id = $product->id;
        $shoppingCart->user_id = Yii::$app->user->id;
        $shoppingCart->name = $product->name;
        $shoppingCart->price = $product->price;
        $shoppingCart->color = $product->color;
        $shoppingCart->size = $product->size;

        if ($shoppingCart->save()) {
            // Redirect or display a success message
            return $this->redirect(['like/index']);
        } else {
            // Handle errors
            return $this->render('add', ['model' => $shoppingCart]);
        }
    }

    public function actionRemove($index)
    {
        $item = LikeItem::findOne($index);
        if ($item) {
            $item->delete();
        }
        return $this->redirect(['index']);
    }
}