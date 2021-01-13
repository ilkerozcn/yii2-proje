<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model vendor\ilkerozcn\yii2proje\src\models\Sinif */

$this->title = 'Create Sinif';
$this->params['breadcrumbs'][] = ['label' => 'Sinifs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sinif-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
