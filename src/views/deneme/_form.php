<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model vendor\ilkerozcn\yii2proje\src\models\Deneme */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="deneme-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Ad')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Soyad')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Yas')->textInput() ?>

    <?= $form->field($model, 'Yoklama')->textInput()?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
