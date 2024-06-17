<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

$this->title = 'MOODY.S'
?>
<div class="product-create container">
    <h2 style="text-align: center; margin-top: 20px;">Create New</h2>

    <?php $form = ActiveForm::begin([
        'action' => Url::to(['admin']), // Путь к странице admin.php
        'options' => [
            'onsubmit' => 'window.location.href="' . Url::to(['admin']) . '"; return false;' // Обработчик события submit
        ]
    ]); ?>

    <p>id</p>
    <?= $form->field($model, 'id')->textInput(['type' => 'number']) ?>
    <p>name</p>
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <p>price</p>
    <?= $form->field($model, 'price')->textInput(['type' => 'number']) ?>
    <p>сomposition</p>
    <?= $form->field($model, 'сomposition')->textInput(['maxlength' => true]) ?>
    <p>size</p>
    <?= $form->field($model, 'size')->textInput(['maxlength' => true]) ?>
    <p>description</p>
    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
    <p>place</p>
    <?= $form->field($model, 'place')->textInput(['maxlength' => true]) ?>
    <p>belonging</p>
    <?= $form->field($model, 'belonging')->textInput(['maxlength' => true]) ?>
    <p>concept</p>
    <?= $form->field($model, 'concept')->textInput(['maxlength' => true]) ?>
    <p>gender</p>
    <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>
    <p>color</p>
    <?= $form->field($model, 'color')->textInput(['maxlength' => true]) ?>
    <p>image</p>
    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <div class="form-group" style="margin-top: 20px">
        <?= Html::submitButton('SAVE', ['class' => 'btn-up']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>