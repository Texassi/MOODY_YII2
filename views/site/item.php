<?php use yii\helpers\Html; $this->title = 'MOODY.S';?>
<main class="container">
    <div class="inf">
        <div class="inf_first">
            <img src="<?= /** @var TYPE_NAME $product */
            $product->image ?>" alt="">
        </div>
        <div class="inf_second">
            <h2><?= $product->name ?></h2>
            <h2><?= $product->price ?>$</h2>
            <p><?= $product->color ?> checks</p>
            <img class="chi" src="<?= $product->image ?>" alt="">
            <div class="del">
                <div class="deliv">
                    <img class="dost" src="img/dost.svg" alt="">
                    <p>Delivery online</p>
                </div>
                <div class="point">
                    <img class="pon" src="img/pon.svg" alt="">
                    <p>121 king street, Melbourne 3000</p>
                </div>
            </div>
            <div class="con">
                <p>Conscious</p>
                <h3><?= $product->description ?></h3>
                <p class="com">Composition — <?= $product->сomposition ?></p>
                <p class="com">Size — <?= $product->size ?></p>
            </div>
            <?= Html::a('ADD TO SHOPPING BAG', ['shopping-cart/add', 'id' => $product->id], ['class' => 'add-to-cart']) ?>
        </div>
    </div>
</main>
