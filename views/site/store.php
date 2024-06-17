<?php use yii\helpers\Html;
use yii\helpers\Url;
use app\models\ProductSearch;

$this->title = 'MOODY.S';
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
            <?= Html::a('Bedroom', ['store', 'ProductSearch[place]' => 'Bedroom'], ['id' => 'mainButton1']) ?>
            <div id="buttonList1" class="hidden">
                <div><?= Html::a('Large furniture', ['store', 'ProductSearch[belonging]' => 'Large furniture', 'ProductSearch[place]' => 'Bedroom']) ?></div>
                <div><?= Html::a('Small furniture', ['store', 'ProductSearch[belonging]' => 'Small furniture', 'ProductSearch[place]' => 'Bedroom']) ?></div>
                <div><?= Html::a('Dishes', ['store', 'ProductSearch[belonging]' => 'Dishes', 'ProductSearch[place]' => 'Bedroom']) ?></div>
                <div><?= Html::a('Storage', ['store', 'ProductSearch[belonging]' => 'Storage', 'ProductSearch[place]' => 'Bedroom']) ?></div>
                <div><?= Html::a('Accessories', ['store', 'ProductSearch[belonging]' => 'Accessories', 'ProductSearch[place]' => 'Bedroom']) ?></div>
                <div><?= Html::a('Soft/Fabric', ['store', 'ProductSearch[belonging]' => 'Soft/Fabric', 'ProductSearch[place]' => 'Bedroom']) ?></div>
            </div>
            <?= Html::a('Living room', ['store', 'ProductSearch[place]' => 'Living room'], ['id' => 'mainButton2']) ?>
            <div id="buttonList2" class="hidden">
                <div><?= Html::a('Large furniture', ['store', 'ProductSearch[belonging]' => 'Large furniture', 'ProductSearch[place]' => 'Living room']) ?></div>
                <div><?= Html::a('Small furniture', ['store', 'ProductSearch[belonging]' => 'Small furniture', 'ProductSearch[place]' => 'Living room']) ?></div>
                <div><?= Html::a('Dishes', ['store', 'ProductSearch[belonging]' => 'Dishes', 'ProductSearch[place]' => 'Living room']) ?></div>
                <div><?= Html::a('Storage', ['store', 'ProductSearch[belonging]' => 'Storage', 'ProductSearch[place]' => 'Living room']) ?></div>
                <div><?= Html::a('Accessories', ['store', 'ProductSearch[belonging]' => 'Accessories', 'ProductSearch[place]' => 'Living room']) ?></div>
                <div><?= Html::a('Soft/Fabric', ['store', 'ProductSearch[belonging]' => 'Soft/Fabric', 'ProductSearch[place]' => 'Living room']) ?></div>
            </div>
            <?= Html::a('Child room', ['store', 'ProductSearch[place]' => 'Child room'], ['id' => 'mainButton3']) ?>
            <div id="buttonList3" class="hidden">
                <div><?= Html::a('Large furniture', ['store', 'ProductSearch[belonging]' => 'Large furniture', 'ProductSearch[place]' => 'Child room']) ?></div>
                <div><?= Html::a('Small furniture', ['store', 'ProductSearch[belonging]' => 'Small furniture', 'ProductSearch[place]' => 'Child room']) ?></div>
                <div><?= Html::a('Dishes', ['store', 'ProductSearch[belonging]' => 'Dishes', 'ProductSearch[place]' => 'Child room']) ?></div>
                <div><?= Html::a('Storage', ['store', 'ProductSearch[belonging]' => 'Storage', 'ProductSearch[place]' => 'Child room']) ?></div>
                <div><?= Html::a('Accessories', ['store', 'ProductSearch[belonging]' => 'Accessories', 'ProductSearch[place]' => 'Child room']) ?></div>
                <div><?= Html::a('Soft/Fabric', ['store', 'ProductSearch[belonging]' => 'Soft/Fabric', 'ProductSearch[place]' => 'Child room']) ?></div>
            </div>
            <?= Html::a('Bathroom', ['store', 'ProductSearch[place]' => 'Bathroom'], ['id' => 'mainButton4']) ?>
            <div id="buttonList4" class="hidden">
                <div><?= Html::a('Large furniture', ['store', 'ProductSearch[belonging]' => 'Large furniture', 'ProductSearch[place]' => 'Bathroom']) ?></div>
                <div><?= Html::a('Small furniture', ['store', 'ProductSearch[belonging]' => 'Small furniture', 'ProductSearch[place]' => 'Bathroom']) ?></div>
                <div><?= Html::a('Dishes', ['store', 'ProductSearch[belonging]' => 'Dishes', 'ProductSearch[place]' => 'Bathroom']) ?></div>
                <div><?= Html::a('Storage', ['store', 'ProductSearch[belonging]' => 'Storage', 'ProductSearch[place]' => 'Bathroom']) ?></div>
                <div><?= Html::a('Accessories', ['store', 'ProductSearch[belonging]' => 'Accessories', 'ProductSearch[place]' => 'Bathroom']) ?></div>
                <div><?= Html::a('Soft/Fabric', ['store', 'ProductSearch[belonging]' => 'Soft/Fabric', 'ProductSearch[place]' => 'Bathroom']) ?></div>
            </div>
            <?= Html::a('Kitchen', ['store', 'ProductSearch[place]' => 'Kitchen'], ['id' => 'mainButton5']) ?>
            <div id="buttonList5" class="hidden">
                <div><?= Html::a('Large furniture', ['store', 'ProductSearch[belonging]' => 'Large furniture', 'ProductSearch[place]' => 'Kitchen']) ?></div>
                <div><?= Html::a('Small furniture', ['store', 'ProductSearch[belonging]' => 'Small furniture', 'ProductSearch[place]' => 'Kitchen']) ?></div>
                <div><?= Html::a('Dishes', ['store', 'ProductSearch[belonging]' => 'Dishes', 'ProductSearch[place]' => 'Kitchen']) ?></div>
                <div><?= Html::a('Storage', ['store', 'ProductSearch[belonging]' => 'Storage', 'ProductSearch[place]' => 'Kitchen']) ?></div>
                <div><?= Html::a('Accessories', ['store', 'ProductSearch[belonging]' => 'Accessories', 'ProductSearch[place]' => 'Kitchen']) ?></div>
                <div><?= Html::a('Soft/Fabric', ['store', 'ProductSearch[belonging]' => 'Soft/Fabric', 'ProductSearch[place]' => 'Kitchen']) ?></div>
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
            <?php $form = \yii\widgets\ActiveForm::begin([
                'action' => ['store'],
                'method' => 'get',
            ]); ?>
            <?= $form->field($searchModel, 'name')->textInput(['placeholder' => 'Search...']) ?>
            <div class="form-group">
                <?= \yii\helpers\Html::submitButton('', ['class' => 'btn']) ?>
            </div>
            <?php \yii\widgets\ActiveForm::end(); ?>
        </div>

        <h1>Our products</h1>
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
                // Снимаем галочку со всех остальных чекбоксов
                for (var j = 0; j < checkboxes.length; j++) {
                    if (checkboxes[j] !== checkboxes[i]) {
                        checkboxes[j].checked = false;
                    }
                }
                checkedColors.push(checkboxes[i].id);
                break; // Выходим из цикла, так как нужно выбрать только один цвет
            }
        }
        var url = new URL(window.location.href);
        url.searchParams.set('ProductSearch[color]', checkedColors.join(','));
        window.location.href = url.toString();
    }
</script>