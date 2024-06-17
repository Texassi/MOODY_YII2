<?php

use app\models\Product;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
    'id' => 'product-form',
    'options' => ['class' => 'form-horizontal'],
]);

$this->title = 'MOODY.S';

?>
<div class="container adm">
    <h2 style="text-align: center; margin-top: 20px">Admin Panel</h2>

    <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>

    <?= GridView::widget([
        'dataProvider' => new \yii\data\ActiveDataProvider([
            'query' => Product::find(),
        ]),
        'columns' => [
            'id',
            'name',
            'price',
            'сomposition',
            'size',
            'description',
            'place',
            'belonging',
            'concept',
            'gender',
            'color',
            'image',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete}',
                'urlCreator' => function ($action, $model, $key, $index) {
                    if ($action === 'update') {
                        return Url::to(['update', 'id' => $model->id]);
                    } elseif ($action === 'delete') {
                        return Url::to(['delete', 'id' => $model->id]);
                    }
                }
            ],
        ],
    ]); ?>

</div>