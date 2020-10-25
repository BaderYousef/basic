<?php

use yii\db\Migration;

/**
 * Class m201025_212537_create_table_test
 */
class m201025_212537_create_table_test extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('test', [
            'id' => $this->primaryKey()->unsigned(),
            'name' => $this->string(45)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201025_212537_create_table_test cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201025_212537_create_table_test cannot be reverted.\n";

        return false;
    }
    */
}
