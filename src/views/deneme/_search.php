<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model vendor\ilkerozcn\yii2proje\src\models\DenemeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="deneme-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Ad') ?>

    <?= $form->field($model, 'Soyad') ?>

    <?= $form->field($model, 'Yas') ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Yoklama') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
