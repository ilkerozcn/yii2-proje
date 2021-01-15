<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m210115_090039_tablolar
 */
class m210115_090039_tablolar extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('deneme', [
            'id' => Schema::TYPE_PK,
            'Ad' => Schema::TYPE_STRING . ' NOT NULL',
            'Soyad' => Schema::TYPE_STRING . ' NOT NULL',
            'Yas' => Schema::TYPE_INTEGER . ' NOT NULL',
            'Sinif_id' => Schema::TYPE_INTEGER . ' NOT NULL',

        ]);
        $this->createTable('sinif', [
            'Deneme_sinif_id' => Schema::TYPE_PK,
            'Sinif' => Schema::TYPE_STRING . ' NOT NULL',
            'Ogretmen' => Schema::TYPE_STRING . ' NOT NULL',
        ]);
        $this->createIndex(
            'idx-deneme-Sinif_id',
            'deneme',
            'Sinif_id'
        );

        $this->addForeignKey(
            'fk-deneme-Sinif_id',
            'deneme',
            'Sinif_id',
            'sinif',
            'Deneme_sinif_id',
            'CASCADE'
        );
        $this->insert('sinif', [
            'Sinif'=>'12-A',
            'Ogretmen'=>'ŞükrüŞimşek',
        ]);
        $this->insert('sinif', [
            'Sinif'=>'12-B',
            'Ogretmen'=>'AhmetMutlu',
        ]);
        $this->insert('sinif', [
            'Sinif'=>'12-C',
            'Ogretmen'=>'MehmetDemir',
        ]);
        $this->insert('deneme', [
            'Ad'=>'Ilker',
            'Soyad'=>'Ozcan',
            'Yas'=>'21',
            'Sinif_id'=>'1',            ]);
        $this->insert('deneme', [
            'Ad'=>'Ahmet',
            'Soyad'=>'Sezer',
            'Yas'=>'18',
            'Sinif_id'=>'1',  ]);
        $this->insert('deneme', [
            'Ad'=>'Mehmet',
            'Soyad'=>'Yıldız',
            'Yas'=>'19',
            'Sinif_id'=>'2',  ]);
        $this->insert('deneme', [
            'Ad'=>'Necdet',
            'Soyad'=>'Mutlu',
            'Yas'=>'22',
            'Sinif_id'=>'3',  ]);




    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

    $this->dropTable('deneme');
    $this->dropTable('sinif');

        return ;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210115_090039_tablolar cannot be reverted.\n";

        return false;
    }
    */
}
