<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model vendor\ilkerozcn\yii2proje\src\models\Sinif */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sinif-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Sinif')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Ogretmen')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'OgrenciSayisi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
