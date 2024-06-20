<?php

use yii\helpers\Html;

$this->title = 'MOODY.S'
?>
<div class="kor container">
    <h1 class="kor-name" name="top">YOU LIKED</h1>
    <div class="kor-con">
        <div class="kor-f2">
            <?php if (!empty($items)): ?>
                <?php foreach ($items as $item): ?>
                    <div class="sec-kor">
                        <div class="kors-1">
                            <div>
                                <img src="<?= $item->product->image ?>" alt="">
                            </div>
                            <div>
                                <h2><?= $item->name ?></h2>
                                <h1><?= $item->price ?>$</h1>
                                <div class="about_kor">
                                    <div>
                                        <p>Art. No.: <?= $item->product_id ?></p>
                                        <p>Color: <?= $item->color ?></p>
                                    </div>
                                    <div>
                                        <p>Size: <?= $item->size ?></p>
                                        <p>Total: <?= $item->price ?>$</p>
                                    </div>
                                </div>
                                <?= Html::a('ADD TO SHOPPING BAG', ['shopping-cart/add', 'id' => $item->id], ['class' => 'add-like']) ?>
                            </div>
                        </div>
                        <div class="kre_kor">
                            <?= Html::a('<img src="' . Yii::$app->request->baseUrl . '/img/krest.svg" alt="">', ['like/remove', 'index' => $item->id], ['data-method' => 'post']) ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="emp" style="justify-content: center">You don't have any products you like.</p>
            <?php endif; ?>
        </div>
    </div>
    <a class="up2" href="#top"><img height="50px" width="50px" src="img/up.svg" alt=""></a>
</div>