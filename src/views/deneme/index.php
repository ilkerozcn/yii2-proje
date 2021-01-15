<?php

use yii\helpers\Html;
use yii\grid\GridView;
use vendor\ilkerozcn\yii2proje\src\widgets\GreetingWidget;
echo GreetingWidget::widget();



/* @var $this yii\web\View */
/* @var $searchModel vendor\ilkerozcn\yii2proje\src\models\DenemeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Öğrencilerin Listesi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deneme-index">



    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Öğrenci Ekle', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <p>
        <?= Html::a('Yazdır', ['yazdir'], ['class' => 'btn btn-success']) ?>
    </p>
       <p><center>
        <?= Html::a('Sınıfları Görmek İçin Tıklayınız', ['/proje/sinif'], ['class'=>'btn btn-primary']) ?>
    </center>

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


              ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
