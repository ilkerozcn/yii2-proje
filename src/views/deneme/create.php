<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model vendor\ilkerozcn\yii2proje\src\models\Deneme */

$this->title = 'Create Deneme';
$this->params['breadcrumbs'][] = ['label' => 'Denemes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deneme-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
