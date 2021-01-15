<?php

namespace vendor\ilkerozcn\yii2proje\src\models;

use Yii;

/**
 * This is the model class for table "deneme".
 *
 * @property string $Ad
 * @property string $Soyad
 * @property int $Yas
 * * @property int $Sınıf_id
 * @property boolean $Yoklama
 */
class Deneme extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'deneme';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Ad', 'Soyad', 'Yas'], 'required'],
            [['Ad', 'Soyad'], 'string'],
            [['Yas','Sinif_id'], 'integer'],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Ad' => 'Ad',
            'Soyad' => 'Soyad',
            'Yas' => 'Yas',
            'Sinif_id'=> 'Sinif_id',
        ];
    }


}
