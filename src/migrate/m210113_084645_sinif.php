<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m210113_084645_sinif
 */
class m210113_084645_sinif extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('sinif', [
            'id' => Schema::TYPE_PK,
            'Sinif' => Schema::TYPE_STRING . ' NOT NULL',
            'Ogretmen' => Schema::TYPE_STRING . ' NOT NULL',
            'OgrenciSayisi' => Schema::TYPE_INTEGER . ' NOT NULL',

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210113_084645_sinif cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210113_084645_sinif cannot be reverted.\n";

        return false;
    }
    */
}
