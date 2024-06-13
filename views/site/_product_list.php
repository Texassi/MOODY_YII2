<div class="dec container2" id="product-list">
    <?php
    use yii\widgets\ListView;

    echo ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_product',
        'layout' => "{items}\n{pager}",
    ]);
    ?>
</div>