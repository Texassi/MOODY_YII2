<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="dec_con2">
    <div class="dec_cart2">
        <div class="container_img">
            <div class="image-container">
                <img width="306px" height="422px" src="<?= $model->image ?>" alt="">
                <div class="popup">
                    <a href="<?= Url::to(['/site/item', 'id' => $model->id]) ?>"><img src="img/cart2.svg" alt="" width="22px" height="24px"></a>
                    <img src="img/l.svg" alt="" height="25px">
                    <?= Html::a(Html::img('img/heart2.svg', ['alt' => '', 'width' => '24px', 'height' => '25px']), ['like/add', 'id' => $model->id]) ?>
                </div>
            </div>
        </div>
        <div>
            <p><?= $model->name ?></p>
            <div class="rating2">
                <span class="star" data-value="1">✩</span>
                <span class="star" data-value="2">✩</span>
                <span class="star" data-value="3">✩</span>
                <span class="star" data-value="4">✩</span>
                <span class="star" data-value="5">✩</span>
            </div>
            <h2><?= $model->price ?>$</h2>
        </div>
    </div>
</div>