<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap5\ActiveForm; */
/* @var $model app\models\SignupForm */

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

$this->title = 'Sing Up';
?>
<div class="site-signup container">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup</p>

    <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'email') ?>

            <div class="form-group">
                <?= Html::submitButton('Sing Up', ['name' => 'signup-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
    </div>
</div>