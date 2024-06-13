<?php

use yii\helpers\Html;

?>

<div class="kor container">
    <h1 class="kor-name">SHOPPING BAG</h1>
    <div class="kor-con">
        <div class="kor-f">
            <?php if (isset($products)) {
                foreach ($products as $product): ?>
                        <div class="sec-kor">
                            <div class="kors-1">
                                <div>
                                    <img src="<?= $product->image ?>" alt="">
                                </div>
                                <div>
                                    <h2><?= $product->product->name ?></h2>
                                    <h1><?= $product->product->price ?>$</h1>
                                    <div class="about_kor">
                                        <div>
                                            <p>Art. No.: <?= $product->product->id ?></p>
                                            <p>Color: <?= $product->product->color ?></p>
                                        </div>
                                        <div>
                                            <p>Size: <?= $product->product->size ?></p>
                                            <p>Total: <?= $product->quantity * $product->product->price ?>$</p>
                                        </div>
                                    </div>
                                    <div class="btns-kor">
                                        <button><img src="img/like.svg" alt=""></button>
                                        <div>
                                            <div class="quantity-block">
                                                <?= Html::a('-', ['remove', 'id' => $product->id], ['class' => 'quantity-arrow-minus']) ?>
                                                <input class="quantity-num" type="number" value="<?= $product->quantity ?>" max="500">
                                                <?= Html::a('+', ['add', 'id' => $product->id], ['class' => 'quantity-arrow-plus']) ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kre_kor">
                                <?= Html::a('<img src="img/krest.svg" alt="">', ['remove', 'id' => $product->id], ['class' => 'btn btn-danger']) ?>
                            </div>
                        </div>
                <?php endforeach;
            } ?>
            <div class="kor-tot">
                <h2>Total</h2>
                <div class="line-kor"></div>
                <h2><?= $total ?>$</h2>
            </div>
        </div>
        <div class="kor-s">
            <h2>ADD A DISCOUNT CODE</h2>
            <form action="<?= Yii::$app->urlManager->createUrl(['cart/add-discount']) ?>" method="post">
                <input id="inp" type="text" name="discount_code">
                <input id="but" type="image" name="picture" src="img/ADD.svg"/>
            </form>
            <div class="ord-kor">
                <div>
                    <p>Order value:</p>
                    <p>Shipping:</p>
                    <p class="p2">Total:</p>
                </div>
                <div>
                    <p><?= $total ?>$</p>
                    <p>0$</p>
                    <p class="p2"><?= $total ?>$</p>
                </div>
            </div>
            <?= Html::a('CONTINUE TO CHECKOUT', ['checkout/index'], ['class' => 'button']) ?>
        </div>
    </div>
</div>