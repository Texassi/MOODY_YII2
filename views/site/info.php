<?php
use app\models\Order;
use yii\helpers\Html;

$this->title = 'MOODY.S';

$orders = Order::find()->where(['user_id' => Yii::$app->user->id])->all();
?>
<div class="info_user container">
    <div>
        <img width="200px" height="200px" src="img/user.png" alt="">
    </div>
    <div>
        <h2>It's you, <?= Yii::$app->user->identity->username ?>!</h2>
    </div>
</div>
<div class="orders container">
    <h1 class="yord">Your orders</h1>
    <div class="ords">
        <?php if (!empty($orders)): ?>
            <?php foreach ($orders as $order): ?>
                <div class="ord">
                    <h1>Order #<?= $order->id ?></h1>
                    <p><?= date('d.m.Y', strtotime($order->created_at)) ?></p>
                    <div class="karts">
                        <?php foreach ($order->orderItems as $orderItem): ?>
                            <div class="kart">
                                <img class="tov" src="<?= $orderItem->product->image ?>" alt="">
                                <p><?= $orderItem->product->name ?></p>
                                <p class="p2"><?= $orderItem->price * $orderItem->quantity ?>$</p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="inf-tot">
                        <h2>Total</h2>
                        <div class="line-inf"></div>
                        <h2><?= $order->total_price ?>$</h2>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="emp">You have no orders.</p>
        <?php endif; ?>
    </div>
</div>
<div style="margin-bottom: 20px">
</div>