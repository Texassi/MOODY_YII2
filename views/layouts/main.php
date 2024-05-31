<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\ButtonDropdown;use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Url;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="icon" href="<?= Yii::$app->request->baseUrl ?> " type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header class="container">
    <div class="head1">
        <a href="<?= Url::to(['/site/index']) ?>" class="name">MOODY STUDIO</a>
        <ul class="ul_main">
            <li><a href="<?= Url::to(['/site/cart']) ?>"><img width="24px" height="28px" src="img/cart.svg" alt=""></a></li>
            <li class="like"><a href="<?= Url::to(['/site/like']) ?>"><img width="29px" height="29px" src="img/like.svg" alt=""></a></li>
            <li>
                <a href="#" id="userLink" style="display: block">
                    <img width="22px" height="29px" src="img/user.svg" alt="">
                </a>

                <div id="dropdownMenu" class="dropdown-menu">
                    <?php
                    $menuItems = [];
                    if (Yii::$app->user->isGuest) {
                        $menuItems[] = ['label' => 'Sign Up', 'url' => ['/site/signup']];
                        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
                    } else {
                        $menuItems[] = '<li>'
                            . Html::beginForm(['/site/info'], 'post')
                            . Html::submitButton(
                                '' . Yii::$app->user->identity->username . '',
                                ['class' => 'btn btn-link']
                            )
                            . Html::endForm()

                            . Html::beginForm(['/site/logout'], 'post')
                            . Html::submitButton(
                                'Login out',
                                ['class' => 'btn btn-link logout']
                            )
                            . Html::endForm()
                            . '</li>';
                    }

                    echo Nav::widget([
                        'options' => ['class' => 'navbar-nav'],
                        'items' => $menuItems,
                    ]);
                    ?>
                </div>
            </li>
        </ul>
    </div>
</header>

<header class="container">
    <div class="head2">
        <ul>
            <li><a href="<?= Url::to(['/site/index']) ?>"><h3>HOME</h3></a></li>
            <li><a href="<?= Url::to(['/site/store']) ?>"><h3>STORE</h3></a></li>
            <li><a href="<?= Url::to(['/site/store']) ?>"><h3>ACCESSORIES</h3></a></li>
            <li><a href="#fot"><h3>BRAND</h3></a></li>
            <li><a href="#fot"><h3>PAGES</h3></a></li>
            <li><a href="#fot"><h3>ABOUT US</h3></a></li>
            <li><a href="#fot"><h3>NEWS</h3></a></li>
            <li><a href="#fot"><h3>CONTACT US</h3></a></li>
        </ul>
    </div>
</header>

<main id="main" class="flex-shrink-0" role="main">
    <div>
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>


<div class="fon3">
    <footer name="fot" class="container">
        <div>
            <h2>MOODY STUDIO</h2>
            <a style="height: 0.1px;" name="fot"></a>
            <p class="p2">Lorem ipsum dolor sit amet, consectetur<br>
                adipiscing elit, sed do eiusmod tempor.</p>
            <p>121 king street, Melbourne 3000</p>
            <p>+61 3 8376 6284</p>
            <p>contact@urbanoutfitters.com</p>
            <div class="soc">
                <a href=""><img src="img/fb.svg" alt=""></a>
                <a href=""><img src="img/tw.svg" alt=""></a>
                <a href=""><img src="img/ins.svg" alt=""></a>
                <a href=""><img src="img/yt.svg" alt=""></a>
            </div>
        </div>
        <div>
            <p class="ph">SHOPPING</p>
            <p class="p3">Your cart</p>
            <p class="p3">Your orders</p>
            <p class="p3">Compared items</p>
            <p class="p3">Wishlist items</p>
            <p class="p3">Shipping detail</p>
        </div>
        <div>
            <p class="ph">MORE LINK</p>
            <p class="p3">Blog</p>
            <p class="p3">Gift Center</p>
            <p class="p3">Buying Guides</p>
            <p class="p3">New Arrivals</p>
            <p class="p3">Clearance</p>
        </div>
        <div class="blog">
            <p class="ph">FROM THE BLOG</p>
            <p class="p3"><span>26</span> may</p>
            <p class="p3 pl">Lorem ipsum dolor sit amet. Possimus enim odio saepe delectus commodi praesentium accusantium quaerat quo deleniti facilis?</p>
            <p class="p3">3 comments</p>
            <div class="line"></div>
        </div>
    </footer>
</div>
<div class="fon4">
    <p>MOODY STUDIO © – All rights reserved</p>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
