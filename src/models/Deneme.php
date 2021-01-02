<?php

namespace vendor\ilkerozcn\yii2proje\src\models;

use Yii;

/**
 * This is the model class for table "deneme".
 *
 * @property string $Ad
 * @property string $Soyad
 * @property int $Yas
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
            [['Yas'], 'integer'],
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
        ];
    }


}
