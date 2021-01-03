<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel vendor\ilkerozcn\yii2proje\src\models\DenemeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Denemes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deneme-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Deneme', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <p>
        <?= Html::a('Yazdır', ['yazdir'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Ad:ntext',
            'Soyad:ntext',
            'Yas',
            'id',
            'Yoklama',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
