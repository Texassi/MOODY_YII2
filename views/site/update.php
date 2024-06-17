<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'MOODY.S'
?>
<div class="product-update container">
    <h2 style="text-align: center; margin-top: 20px;"><?= Html::encode($this->title) ?></h2>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'price')->textInput(['type' => 'number']) ?>
    <?= $form->field($model, 'сomposition')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'size')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'place')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'belonging')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'concept')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'color')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('SAVE', ['class' => 'btn-up']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>