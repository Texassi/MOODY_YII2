<?php

namespace app\controllers;

use app\models\Product;

class ProductsItemController extends \yii\web\Controller
{
    public function actionItem($id)
{
    $product = Product::findOne($id);

    if ($product === null) {
        throw new \yii\web\NotFoundHttpException('The requested product does not exist.');
    }

    return $this->render('item', [
        'product' => $product,
    ]);
}
}