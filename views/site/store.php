<?php use yii\helpers\Html;
use yii\helpers\Url;
use app\models\ProductSearch;
?>
<div class="fon_cr">
    <h2 class="h2_1">Member Exclusive</h2>
    <h2 class="h2_2">15% off everything + extra $10 off for plus status</h2>
    <p>Not a member? JOIN NOW TO SHOP.</p>
</div>

<p style="height: 0.1px;"><a name="top"></a></p>
<main class="shop container">
    <div class="nav nav_items">
        <div class="fir">
            <h3>All products</h3>
            <?= Html::a('All products', ['store', 'ProductSearch[concept]' => '']) ?>
        </div>
        <div class="sec">
            <h3>Shop by room</h3>
            <a id="mainButton1">Bedroom</a>
            <div id="buttonList1" class="hidden">
                <div><a href="">Large furniture</a></div>
                <div><a href="">Small furniture</a></div>
                <div><a href="">Dishes</a></div>
                <div><a href="">Storage</a></div>
                <div><a href="">Accessories</a></div>
                <div><a href="">Soft/Fabric</a></div>
            </div>
            <a id="mainButton2">Living room</a>
            <div id="buttonList2" class="hidden">
                <div><a href="">Large furniture</a></div>
                <div><a href="">Small furniture</a></div>
                <div><a href="">Dishes</a></div>
                <div><a href="">Storage</a></div>
                <div><a href="">Accessories</a></div>
                <div><a href="">Soft/Fabric</a></div>
            </div>
            <a id="mainButton3">Child room</a>
            <div id="buttonList3" class="hidden">
                <div><a href="">Large furniture</a></div>
                <div><a href="">Small furniture</a></div>
                <div><a href="">Dishes</a></div>
                <div><a href="">Storage</a></div>
                <div><a href="">Accessories</a></div>
                <div><a href="">Soft/Fabric</a></div>
            </div>
            <a id="mainButton4">Bathroom</a>
            <div id="buttonList4" class="hidden">
                <div><a href="">Large furniture</a></div>
                <div><a href="">Small furniture</a></div>
                <div><a href="">Dishes</a></div>
                <div><a href="">Storage</a></div>
                <div><a href="">Accessories</a></div>
                <div><a href="">Soft/Fabric</a></div>
            </div>
            <a id="mainButton5">Kitchen</a>
            <div id="buttonList5" class="hidden">
                <div><a href="">Large furniture</a></div>
                <div><a href="">Small furniture</a></div>
                <div><a href="">Dishes</a></div>
                <div><a href="">Storage</a></div>
                <div><a href="">Accessories</a></div>
                <div><a href="">Soft/Fabric</a></div>
            </div>
        </div>
        <div class="thi">
            <h3>Shop by concept</h3>
            <?= Html::a('Conscious', ['store', 'ProductSearch[concept]' => 'Conscious']) ?>
            <?= Html::a('Premium quality', ['store', 'ProductSearch[concept]' => 'Premium quality']) ?>
            <?= Html::a('Classic collection', ['store', 'ProductSearch[concept]' => 'Classic collection']) ?>
        </div>
        <div class="fou">
            <h3>Gender</h3>
            <div>
                <input id="man" type="checkbox" class="gender-filter" <?= Yii::$app->request->get('ProductSearch')['gender'] == 'Man' ? 'checked' : '' ?>>
                <label for="man" onclick="document.getElementById('man').checked = !document.getElementById('man').checked;"><?= Html::a('Man', ['store', 'ProductSearch[gender]' => 'Man']) ?></label>
            </div>
            <div>
                <input id="woman" type="checkbox" class="gender-filter" <?= Yii::$app->request->get('ProductSearch')['gender'] == 'Woman' ? 'checked' : '' ?>>
                <label for="woman" onclick="document.getElementById('woman').checked = !document.getElementById('woman').checked;"><?= Html::a('Woman', ['store', 'ProductSearch[gender]' => 'Woman']) ?></label>
            </div>
        </div>
        <div class="fiv">
            <h3>Color</h3>
            <form>
                <?php
                $selectedColors = isset(Yii::$app->request->get('ProductSearch')['color']) ? explode(',', Yii::$app->request->get('ProductSearch')['color']) : [];
                ?>
                <input id="white" type="checkbox" class="gender-filter" <?= in_array('white', $selectedColors) ? 'checked' : '' ?> onclick="filterByColor()">
                <input id="black" type="checkbox" class="gender-filter" <?= in_array('black', $selectedColors) ? 'checked' : '' ?> onclick="filterByColor()">
                <input id="grey" type="checkbox" class="gender-filter" <?= in_array('grey', $selectedColors) ? 'checked' : '' ?> onclick="filterByColor()">
                <input id="yellow" type="checkbox" class="gender-filter" <?= in_array('yellow', $selectedColors) ? 'checked' : '' ?> onclick="filterByColor()">
            </form>
            <form>
                <input id="orange" type="checkbox" class="gender-filter" <?= in_array('orange', $selectedColors) ? 'checked' : '' ?> onclick="filterByColor()">
                <input id="red" type="checkbox" class="gender-filter" <?= in_array('red', $selectedColors) ? 'checked' : '' ?> onclick="filterByColor()">
                <input id="salptovy" type="checkbox" class="gender-filter" <?= in_array('salptovy', $selectedColors) ? 'checked' : '' ?> onclick="filterByColor()">
                <input id="green" type="checkbox" class="gender-filter" <?= in_array('green', $selectedColors) ? 'checked' : '' ?> onclick="filterByColor()">
            </form>
            <form>
                <input id="pink" type="checkbox" class="gender-filter" <?= in_array('pink', $selectedColors) ? 'checked' : '' ?> onclick="filterByColor()">
                <input id="purple" type="checkbox" class="gender-filter" <?= in_array('purple', $selectedColors) ? 'checked' : '' ?> onclick="filterByColor()">
                <input id="blue" type="checkbox" class="gender-filter" <?= in_array('blue', $selectedColors) ? 'checked' : '' ?> onclick="filterByColor()">
                <input id="darkblue" type="checkbox" class="gender-filter" <?= in_array('darkblue', $selectedColors) ? 'checked' : '' ?> onclick="filterByColor()">
            </form>
        </div>
        <div class="six">
            <h3>Price</h3>
            <div>
                <input id="1c" type="checkbox" class="gender-filter" <?= Yii::$app->request->get('ProductSearch')['price'] == '0-40' ? 'checked' : '' ?>>
                <label for="1c" onclick="document.getElementById('0-40').checked = !document.getElementById('0-40').checked;"><?= Html::a('0$ – 40$', ['store', 'ProductSearch[price]' => '0-40']) ?></label>
            </div>
            <div>
                <input id="2c" type="checkbox" class="gender-filter" <?= Yii::$app->request->get('ProductSearch')['price'] == '40-100' ? 'checked' : '' ?>>
                <label for="2c" onclick="document.getElementById('40-100').checked = !document.getElementById('40-100').checked;"><?= Html::a('40$ – 100$', ['store', 'ProductSearch[price]' => '40-100']) ?></label>
            </div>
            <div>
                <input id="3c" type="checkbox" class="gender-filter" <?= Yii::$app->request->get('ProductSearch')['price'] == '150-175' ? 'checked' : '' ?>>
                <label for="3c" onclick="document.getElementById('150-175').checked = !document.getElementById('150-175').checked;"><?= Html::a('150$ – 175$', ['store', 'ProductSearch[price]' => '150-175']) ?></label>
            </div>
            <div>
                <input id="4c" type="checkbox" class="gender-filter" <?= Yii::$app->request->get('ProductSearch')['price'] == '175-250' ? 'checked' : '' ?>>
                <label for="4c" onclick="document.getElementById('175-250').checked = !document.getElementById('175-250').checked;"><?= Html::a('175$ – 250$', ['store', 'ProductSearch[price]' => '175-250']) ?></label>
            </div>
            <div>
                <input id="5c" type="checkbox" class="gender-filter" <?= Yii::$app->request->get('ProductSearch')['price'] == '250-350' ? 'checked' : '' ?>>
                <label for="5c" onclick="document.getElementById('250-350').checked = !document.getElementById('250-350').checked;"><?= Html::a('250$ – 350$', ['store', 'ProductSearch[price]' => '250-350']) ?></label>
            </div>
        </div>
    </div>
    <div class="cart-shop">
        <div class="d5">
            <form>
                <input type="text" placeholder="Search...">
                <button type="submit"></button>
            </form>
        </div>
        <h1>All products</h1>
        <p>It's easy to transform your home's interior with our large selection of accessories.</p>
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
        <a class="up" href="#top"><img height="50px" width="50px" src="img/up.svg" alt=""></a>
    </div>
</main>

<script>
    function filterByColor() {
        var checkedColors = [];
        var checkboxes = document.querySelectorAll('.gender-filter');
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked) {
                checkedColors.push(checkboxes[i].id);
            }
        }
        var url = new URL(window.location.href);
        url.searchParams.set('ProductSearch[color]', checkedColors.join(','));
        window.location.href = url.toString();
    }
</script>