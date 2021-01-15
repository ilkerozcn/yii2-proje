<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model vendor\ilkerozcn\yii2proje\src\models\Sinif */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sinifs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="sinif-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Deneme_sinif_id' => $model->Deneme_sinif_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Deneme_sinif_id' => $model->Deneme_sinif_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Sinif:ntext',
            'Ogretmen:ntext',

            'id',
        ],
    ]) ?>

</div>
