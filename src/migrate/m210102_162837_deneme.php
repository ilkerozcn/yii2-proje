<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m210102_162837_deneme
 */
class m210102_162837_deneme extends Migration
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

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210102_162837_deneme cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210102_162837_deneme cannot be reverted.\n";

        return false;
    }
    */
}
