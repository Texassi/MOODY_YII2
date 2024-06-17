<?php
use yii\helpers\Html;

$this->title = 'MOODY.S';
?>

<div class="kor container">
    <h1 class="kor-name">SHOPPING BAG</h1>
    <div class="kor-con">
        <div class="kor-f">
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
                                        <p>Total: <?= $item->price * $item->quantity ?>$</p>
                                    </div>
                                </div>
                                <div class="btns-kor">
                                    <button><img src="/img/like.svg" alt=""></button>
                                    <div>
                                        <div class="quantity-block">
                                            <button class="quantity-arrow-minus"> - </button>
                                            <input class="quantity-num" type="number" value="<?= $item->quantity ?>" max="500">
                                            <button class="quantity-arrow-plus"> + </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kre_kor">
                            <?= Html::a('<img src="' . Yii::$app->request->baseUrl . '/img/krest.svg" alt="">', ['shopping-cart/remove', 'index' => $item->id], ['data-method' => 'post']) ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="emp">Your shopping cart is empty.</p>
            <?php endif; ?>
            <div class="kor-tot">
                <h2>Total</h2>
                <div class="line-kor"></div>
                <h2><?= $totalPrice ?>$</h2>
            </div>
        </div>
        <div class="kor-s">
            <h2>ADD A DISCOUNT CODE</h2>
            <form action="<?= Yii::$app->urlManager->createUrl(['shopping-cart/index']) ?>" method="post">
                <input id="inp" type="text" name="discount_code">
                <input id="but" type="image" name="picture" src="<?= Yii::$app->request->baseUrl ?>/img/ADD.svg"/>
                <input type="hidden" name="_csrf" value="<?= Yii::$app->request->getCsrfToken() ?>">
            </form>
            <div class="ord-kor">
                <div>
                    <p>Order value:</p>
                    <p>Shipping:</p>
                    <p class="p2">Total:</p>
                </div>
                <div>
                    <p><?= $totalPrice ?>$</p>
                    <p>0$</p>
                    <p class="p2"><?= $totalPrice ?>$</p>
                </div>
            </div>
            <button>CONTINUE TO CHECKUOT</button>
        </div>
    </div>
</div>