<?php

/** @var yii\web\View $this */

use yii\helpers\Url;

$this->title = 'MOODY.S';
?>
<div class="site-index">
    <header class="container">
        <div class="head3">
            <div>
                <img width="30px" src="img/car.svg" alt="">
                <p>FREE SHIPPING</p>
            </div>
            <div>
                <img width="22px" style="margin-top: -6px;" src="img/mon.svg" alt="">
                <p>100% MONEY BACK</p>
            </div>
            <div>
                <img width="22px" height="26px" src="img/sup.svg" alt="">
                <p>SUPPORT 24/7</p>
            </div>
        </div>
    </header>

    <div class="fon">
        <div class="cont_gl">
            <div class="owl-carousel">
                <div class="item">
                    <div class="cont_gl">
                        <div class="img_gl">
                            <img class="img1" src="img/chair_glav.svg" alt="">
                        </div>
                        <div class="text_gl">
                            <h3>HOT DEALS THIS WEEK</h3>
                            <h1>SALE UP 50%<br>
                                MODERN FURNITURE</h1>
                            <button>VIEW NOW</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="cont_gl">
                        <div class="img_gl">
                            <img class="img2" src="img/stol.png" style="width: 420px;
                            height: 420px;
                            margin-right: 83px;
                            margin-top: 75px;
                            margin-left: 91px;
                            margin-top: -10px;">
                        </div>
                        <div class="text_gl">
                            <h3>HOT DEALS THIS MONTH</h3>
                            <h1>SALE UP 30%<br>
                                GARDEN FURNITURE</h1>
                            <button>VIEW NOW</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="cont_gl">
                        <div class="img_gl">
                            <img class="img3" src="img/bed.png">
                        </div>
                        <div class="text_gl">
                            <h3>HOT DEALS THIS DAY</h3>
                            <h1>SALE UP 70%<br>
                                MODERN BED "MOXXEL"</h1>
                            <button>VIEW NOW</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="cont_gl">
                        <div class="img_gl">
                            <img class="img4" src="img/table.png" style="margin-left: 144px;
                            margin-right: 50px;
                            width: 400px;
                            height: 430px;
                            margin-top: -20px;">
                        </div>
                        <div class="text_gl">
                            <h3>HOT DEALS THIS WEEK</h3>
                            <h1>SALE UP 10%<br>
                                DECORATION</h1>
                            <button>VIEW NOW</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="det container">
        <div class="det_cart">
            <div class="det_img">
                <img width="353px" height="384px" src="img/chair_det.svg" alt="">
            </div>
            <div class="det_text">
                <h2>INY VINTAGE CHAIR</h2>
                <button>VIEW DETAILS</button>
            </div>
        </div>
        <div class="det_cart2">
            <div class="det_img">
                <img width="353px" height="368px" src="img/vasa_det.svg" alt="">
            </div>
            <div class="det_text">
                <h2>LARGE TERRACOTA VASE</h2>
                <button>VIEW DETAILS</button>
            </div>
        </div>
    </div>
    <div class="det2 container">
        <div class="carus">
            <div class="det_gl">
                <div>
                    <div class="det_cart">
                        <div class="det_img">
                            <img width="353px" height="384px" src="img/chair_det.svg" alt="">
                        </div>
                        <div class="det_text">
                            <h2>INY VINTAGE CHAIR</h2>
                            <button>VIEW DETAILS</button>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="det_cart2">
                        <div class="det_img">
                            <img width="353px" height="368px" src="img/vasa_det.svg" alt="">
                        </div>
                        <div class="det_text">
                            <h2>LARGE TERRACOTA VASE</h2>
                            <button>VIEW DETAILS</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dec container">
        <div class="dec_con1">
            <div class="dec_cart1">
                <div class="imgs">
                    <img class="img1" src="img/block.svg" alt="">
                    <img src="img/vasa_dec.svg" alt="">
                </div>
                <div class="black_fon">
                    <h2>DECOR</h2>
                    <p>Lorem ipsum dolor sit amet, <br>
                        consectetur adipiscing elit, <br>
                        sed do eiusmod tempor <br>
                        incididunt ut labore et dolore <br>
                        magna aliqua.</p>
                    <button>VIEW ALL</button>
                </div>
            </div>
        </div>
        <div class="dec_con2">
            <div class="dec_cart2">
                <div class="container_img">
                    <div class="image-container">
                        <img src="img/dec1.svg" alt="">
                        <div class="popup">
                            <a href="<?= Url::to(['/site/item']) ?>"><img src="img/cart2.svg" alt="" width="22px" height="24px"></a>
                            <img src="img/l.svg" alt="" height="25px">
                            <a href=""><img src="img/heart2.svg" alt="" width="24px" height="25px"></a>
                        </div>
                    </div>
                </div>
                <div>
                    <p>Linen Beach Towel</p>
                    <div class="rating">
                        <span class="star" data-value="1">✩</span>
                        <span class="star" data-value="2">✩</span>
                        <span class="star" data-value="3">✩</span>
                        <span class="star" data-value="4">✩</span>
                        <span class="star" data-value="5">✩</span>
                    </div>
                    <h2>30$</h2>
                </div>
            </div>
        </div>
        <div class="dec_con2">
            <div class="dec_cart2">
                <div class="container_img">
                    <div class="image-container">
                        <img src="img/dec2.svg" alt="">
                        <div class="popup">
                            <a href="<?= Url::to(['/site/item']) ?>"><img src="img/cart2.svg" alt="" width="22px" height="24px"></a>
                            <img src="img/l.svg" alt="" height="25px">
                            <a href=""><img src="img/heart2.svg" alt="" width="24px" height="25px"></a>
                        </div>
                    </div>
                </div>
                <div>
                    <p>Square Clear Glass Box</p>
                    <div class="rating">
                        <span class="star" data-value="1">✩</span>
                        <span class="star" data-value="2">✩</span>
                        <span class="star" data-value="3">✩</span>
                        <span class="star" data-value="4">✩</span>
                        <span class="star" data-value="5">✩</span>
                    </div>
                    <h2>30$</h2>
                </div>
            </div>
        </div>
        <div class="dec_con2">
            <div class="dec_cart2">
                <div class="container_img">
                    <div class="image-container">
                        <img src="img/dec3.svg" alt="">
                        <div class="popup">
                            <a href="<?= Url::to(['/site/item']) ?>"><img src="img/cart2.svg" alt="" width="22px" height="24px"></a>
                            <img src="img/l.svg" alt="" height="25px">
                            <a href=""><img src="img/heart2.svg" alt="" width="24px" height="25px"></a>
                        </div>
                    </div>
                </div>
                <div>
                    <p>4-pack Small Ceramic Plates</p>
                    <div class="rating">
                        <span class="star" data-value="1">✩</span>
                        <span class="star" data-value="2">✩</span>
                        <span class="star" data-value="3">✩</span>
                        <span class="star" data-value="4">✩</span>
                        <span class="star" data-value="5">✩</span>
                    </div>
                    <h2>30$</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="dec container">
        <div class="dec_con2">
            <div class="dec_cart2">
                <div class="container_img">
                    <div class="image-container">
                        <img src="img/dec4.svg" alt="">
                        <div class="popup">
                            <a href="<?= Url::to(['/site/item']) ?>"><img src="img/cart2.svg" alt="" width="22px" height="24px"></a>
                            <img src="img/l.svg" alt="" height="25px">
                            <a href=""><img src="img/heart2.svg" alt="" width="24px" height="25px"></a>
                        </div>
                    </div>
                </div>
                <div>
                    <p>Large Clear Glass Box</p>
                    <div class="rating">
                        <span class="star" data-value="1">✩</span>
                        <span class="star" data-value="2">✩</span>
                        <span class="star" data-value="3">✩</span>
                        <span class="star" data-value="4">✩</span>
                        <span class="star" data-value="5">✩</span>
                    </div>
                    <h2>30$</h2>
                </div>
            </div>
        </div>
        <div class="dec_con2">
            <div class="dec_cart2">
                <div class="container_img">
                    <div class="image-container">
                        <img src="img/dec5.svg" alt="">
                        <div class="popup">
                            <a href="<?= Url::to(['/site/item']) ?>"><img src="img/cart2.svg" alt="" width="22px" height="24px"></a>
                            <img src="img/l.svg" alt="" height="25px">
                            <a href=""><img src="img/heart2.svg" alt="" width="24px" height="25px"></a>
                        </div>
                    </div>
                </div>
                <div>
                    <p>Round Jute Placemat</p>
                    <div class="rating">
                        <span class="star" data-value="1">✩</span>
                        <span class="star" data-value="2">✩</span>
                        <span class="star" data-value="3">✩</span>
                        <span class="star" data-value="4">✩</span>
                        <span class="star" data-value="5">✩</span>
                    </div>
                    <h2>30$</h2>
                </div>
            </div>
        </div>
        <div class="dec_con2">
            <div class="dec_cart2">
                <div class="container_img">
                    <div class="image-container">
                        <img src="img/dec6.svg" alt="">
                        <div class="popup">
                            <a href="<?= Url::to(['/site/item']) ?>"><img src="img/cart2.svg" alt="" width="22px" height="24px"></a>
                            <img src="img/l.svg" alt="" height="25px">
                            <a href=""><img src="img/heart2.svg" alt="" width="24px" height="25px"></a>
                        </div>
                    </div>
                </div>
                <div>
                    <p>Metal Wire Basket</p>
                    <div class="rating">
                        <span class="star" data-value="1">✩</span>
                        <span class="star" data-value="2">✩</span>
                        <span class="star" data-value="3">✩</span>
                        <span class="star" data-value="4">✩</span>
                        <span class="star" data-value="5">✩</span>
                    </div>
                    <h2>30$</h2>
                </div>
            </div>
        </div>
        <div class="dec_con1">
            <div class="dec_cart1">
                <div class="imgs">
                    <img class="img1" src="img/bag_dec.svg" alt="">
                    <img src="img/vasa_dec.svg" alt="">
                </div>
                <div class="black_fon">
                    <h2>BOHO CHIC</h2>
                    <p>Lorem ipsum dolor sit amet, <br>
                        consectetur adipiscing elit, <br>
                        sed do eiusmod tempor <br>
                        incididunt ut labore et dolore <br>
                        magna aliqua.</p>
                    <button>VIEW ALL</button>
                </div>
            </div>
        </div>
    </div>
    <div class="fon2">
        <div class="block_fr container">
            <div class="block2">
                <div class="bl_text">
                    <h2>BEDSHEET SETS</h2>
                    <div class="price">
                        <h2>$50.00</h2>
                        <p>$220.00</p>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur<br>
                        adipiscing elit, sed do eiusmod tempor.</p>
                    <button>VIEW ALL</button>
                </div>
            </div>
        </div>
    </div>
    <div class="catalog container">
        <h2>TOP RATING</h2>
        <div id="products2">
            <div class="sec_catal container">
                <div class="product">
                    <div class="catal">
                        <div>
                            <img class="img_top" src="img/cat1.svg" alt="">
                        </div>
                        <div class="catal_text">
                            <p>Tray with Foot</p>
                            <div class="rating">
                                <span class="star" data-value="1">✩</span>
                                <span class="star" data-value="2">✩</span>
                                <span class="star" data-value="3">✩</span>
                                <span class="star" data-value="4">✩</span>
                                <span class="star" data-value="5">✩</span>
                            </div>
                            <h2>30$</h2>
                            <div class="popup">
                                <a href="<?= Url::to(['/site/item']) ?>"><img src="img/cart2.svg" alt="" width="22px" height="24px"></a>
                                <img src="img/l.svg" alt="" height="25px">
                                <a href=""><img src="img/heart2.svg" alt="" width="24px" height="25px"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="catal">
                        <div>
                            <img class="img_top" src="img/cat1.svg" alt="">
                        </div>
                        <div class="catal_text">
                            <p>Tray with Foot</p>
                            <div class="rating">
                                <span class="star" data-value="1">✩</span>
                                <span class="star" data-value="2">✩</span>
                                <span class="star" data-value="3">✩</span>
                                <span class="star" data-value="4">✩</span>
                                <span class="star" data-value="5">✩</span>
                            </div>
                            <h2>30$</h2>
                            <div class="popup">
                                <a href="<?= Url::to(['/site/item']) ?>"><img src="img/cart2.svg" alt="" width="22px" height="24px"></a>
                                <img src="img/l.svg" alt="" height="25px">
                                <a href=""><img src="img/heart2.svg" alt="" width="24px" height="25px"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="catal">
                        <div>
                            <img class="img_top" src="img/cat1.svg" alt="">
                        </div>
                        <div class="catal_text">
                            <p>Tray with Foot</p>
                            <div class="rating">
                                <span class="star" data-value="1">✩</span>
                                <span class="star" data-value="2">✩</span>
                                <span class="star" data-value="3">✩</span>
                                <span class="star" data-value="4">✩</span>
                                <span class="star" data-value="5">✩</span>
                            </div>
                            <h2>30$</h2>
                            <div class="popup">
                                <a href="<?= Url::to(['/site/item']) ?>"><img src="img/cart2.svg" alt="" width="22px" height="24px"></a>
                                <img src="img/l.svg" alt="" height="25px">
                                <a href=""><img src="img/heart2.svg" alt="" width="24px" height="25px"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="catal">
                        <div>
                            <img class="img_top" src="img/cat1.svg" alt="">
                        </div>
                        <div class="catal_text">
                            <p>Tray with Foot</p>
                            <div class="rating">
                                <span class="star" data-value="1">✩</span>
                                <span class="star" data-value="2">✩</span>
                                <span class="star" data-value="3">✩</span>
                                <span class="star" data-value="4">✩</span>
                                <span class="star" data-value="5">✩</span>
                            </div>
                            <h2>30$</h2>
                            <div class="popup">
                                <a href="<?= Url::to(['/site/item']) ?>"><img src="img/cart2.svg" alt="" width="22px" height="24px"></a>
                                <img src="img/l.svg" alt="" height="25px">
                                <a href=""><img src="img/heart2.svg" alt="" width="24px" height="25px"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="catal">
                        <div>
                            <img class="img_top" src="img/cat1.svg" alt="">
                        </div>
                        <div class="catal_text">
                            <p>Tray with Foot</p>
                            <div class="rating">
                                <span class="star" data-value="1">✩</span>
                                <span class="star" data-value="2">✩</span>
                                <span class="star" data-value="3">✩</span>
                                <span class="star" data-value="4">✩</span>
                                <span class="star" data-value="5">✩</span>
                            </div>
                            <h2>30$</h2>
                            <div class="popup">
                                <a href="<?= Url::to(['/site/item']) ?>"><img src="img/cart2.svg" alt="" width="22px" height="24px"></a>
                                <img src="img/l.svg" alt="" height="25px">
                                <a href=""><img src="img/heart2.svg" alt="" width="24px" height="25px"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="catal">
                        <div>
                            <img class="img_top" src="img/cat1.svg" alt="">
                        </div>
                        <div class="catal_text">
                            <p>Tray with Foot</p>
                            <div class="rating">
                                <span class="star" data-value="1">✩</span>
                                <span class="star" data-value="2">✩</span>
                                <span class="star" data-value="3">✩</span>
                                <span class="star" data-value="4">✩</span>
                                <span class="star" data-value="5">✩</span>
                            </div>
                            <h2>30$</h2>
                            <div class="popup">
                                <a href="<?= Url::to(['/site/item']) ?>"><img src="img/cart2.svg" alt="" width="22px" height="24px"></a>
                                <img src="img/l.svg" alt="" height="25px">
                                <a href=""><img src="img/heart2.svg" alt="" width="24px" height="25px"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="catal">
                        <div>
                            <img class="img_top" src="img/cat1.svg" alt="">
                        </div>
                        <div class="catal_text">
                            <p>Tray with Foot</p>
                            <div class="rating">
                                <span class="star" data-value="1">✩</span>
                                <span class="star" data-value="2">✩</span>
                                <span class="star" data-value="3">✩</span>
                                <span class="star" data-value="4">✩</span>
                                <span class="star" data-value="5">✩</span>
                            </div>
                            <h2>30$</h2>
                            <div class="popup">
                                <a href="<?= Url::to(['/site/item']) ?>"><img src="img/cart2.svg" alt="" width="22px" height="24px"></a>
                                <img src="img/l.svg" alt="" height="25px">
                                <a href=""><img src="img/heart2.svg" alt="" width="24px" height="25px"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="catal">
                        <div>
                            <img class="img_top" src="img/cat1.svg" alt="">
                        </div>
                        <div class="catal_text">
                            <p>Tray with Foot</p>
                            <div class="rating">
                                <span class="star" data-value="1">✩</span>
                                <span class="star" data-value="2">✩</span>
                                <span class="star" data-value="3">✩</span>
                                <span class="star" data-value="4">✩</span>
                                <span class="star" data-value="5">✩</span>
                            </div>
                            <h2>30$</h2>
                            <div class="popup">
                                <a href="<?= Url::to(['/site/item']) ?>"><img src="img/cart2.svg" alt="" width="22px" height="24px"></a>
                                <img src="img/l.svg" alt="" height="25px">
                                <a href=""><img src="img/heart2.svg" alt="" width="24px" height="25px"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="catal">
                        <div>
                            <img class="img_top" src="img/cat1.svg" alt="">
                        </div>
                        <div class="catal_text">
                            <p>Tray with Foot</p>
                            <div class="rating">
                                <span class="star" data-value="1">✩</span>
                                <span class="star" data-value="2">✩</span>
                                <span class="star" data-value="3">✩</span>
                                <span class="star" data-value="4">✩</span>
                                <span class="star" data-value="5">✩</span>
                            </div>
                            <h2>30$</h2>
                            <div class="popup">
                                <a href="<?= Url::to(['/site/item']) ?>"><img src="img/cart2.svg" alt="" width="22px" height="24px"></a>
                                <img src="img/l.svg" alt="" height="25px">
                                <a href=""><img src="img/heart2.svg" alt="" width="24px" height="25px"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="catal">
                        <div>
                            <img class="img_top" src="img/cat1.svg" alt="">
                        </div>
                        <div class="catal_text">
                            <p>Tray with Foot</p>
                            <div class="rating">
                                <span class="star" data-value="1">✩</span>
                                <span class="star" data-value="2">✩</span>
                                <span class="star" data-value="3">✩</span>
                                <span class="star" data-value="4">✩</span>
                                <span class="star" data-value="5">✩</span>
                            </div>
                            <h2>30$</h2>
                            <div class="popup">
                                <a href="<?= Url::to(['/site/item']) ?>"><img src="img/cart2.svg" alt="" width="22px" height="24px"></a>
                                <img src="img/l.svg" alt="" height="25px">
                                <a href=""><img src="img/heart2.svg" alt="" width="24px" height="25px"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="catal">
                        <div>
                            <img class="img_top" src="img/cat1.svg" alt="">
                        </div>
                        <div class="catal_text">
                            <p>Tray with Foot</p>
                            <div class="rating">
                                <span class="star" data-value="1">✩</span>
                                <span class="star" data-value="2">✩</span>
                                <span class="star" data-value="3">✩</span>
                                <span class="star" data-value="4">✩</span>
                                <span class="star" data-value="5">✩</span>
                            </div>
                            <h2>30$</h2>
                            <div class="popup">
                                <a href="<?= Url::to(['/site/item']) ?>"><img src="img/cart2.svg" alt="" width="22px" height="24px"></a>
                                <img src="img/l.svg" alt="" height="25px">
                                <a href=""><img src="img/heart2.svg" alt="" width="24px" height="25px"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="catal">
                        <div>
                            <img class="img_top" src="img/cat1.svg" alt="">
                        </div>
                        <div class="catal_text">
                            <p>Tray with Foot</p>
                            <div class="rating">
                                <span class="star" data-value="1">✩</span>
                                <span class="star" data-value="2">✩</span>
                                <span class="star" data-value="3">✩</span>
                                <span class="star" data-value="4">✩</span>
                                <span class="star" data-value="5">✩</span>
                            </div>
                            <h2>30$</h2>
                            <div class="popup">
                                <a href="<?= Url::to(['/site/item']) ?>"><img src="img/cart2.svg" alt="" width="22px" height="24px"></a>
                                <img src="img/l.svg" alt="" height="25px">
                                <a href=""><img src="img/heart2.svg" alt="" width="24px" height="25px"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="but">
            <button id="loadMore">Load more products</button>
            <button id="showLess">Show less</button>
        </div>

    </div>
    <div class="container">
        <div class="forma">
            <div>
                <h2>SING UP FOR THE NEWSLETTER</h2>
                <p>Subscribe for the latest stories and promotions</p>
            </div>
            <form action="site/contact.php" method="post">
                <input id="email" type="text" name="email" placeholder="Enter your e-mail address">
                <input id="but" type="image" name="picture" src="img/mail.svg"/>
            </form>
        </div>
    </div>


</div>
