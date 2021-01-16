<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel vendor\ilkerozcn\yii2proje\src\models\SinifSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Siniflar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sinif-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Sınıf Ekle', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <p> <center>
        <?= Html::a('Öğrenci Listesini Görmek İçin Tıklayınız', ['/proje/deneme'], ['class'=>'btn btn-primary']) ?>
    </center>


       </p>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Sinif:ntext',
            'Ogretmen:ntext',



            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
