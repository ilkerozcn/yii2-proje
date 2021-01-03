<?php
use yii\helpers\Html;
echo "sdsd"
?>
<div class="deneme-yazdır">
    <h1><?= Html::encode($this->title) ?></h1>
<p>

    <?= Html::a('Delete', ['delete'], [
        'class' => 'btn btn-danger',
        'data' => [
            'confirm' => 'Are you sure you want to delete this item?',
            'method' => 'post',
        ],
    ]) ?>


</p>
</div>
