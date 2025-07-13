<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m250709_150859_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
            'userId' => $this->primaryKey(),
        ]);
        $this->addColumn('{{%user}}', 'firstName', 'varchar(25) NOT NULL');
        $this->addColumn('{{%user}}', 'middleNames', 'varchar(50)');
        $this->addColumn('{{%user}}', 'lastName', 'varchar(25) NOT NULL');
        $this->addColumn('{{%user}}', 'email', 'varchar(50) UNIQUE NOT NULL');
        $this->addColumn('{{%user}}', 'password', 'varchar(25) NOT NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%user}}', 'firstName');
        $this->dropColumn('{{%user}}', 'middleNames');
        $this->dropColumn('{{%user}}', 'lastName');
        $this->dropColumn('{{%user}}', 'email');
        $this->dropColumn('{{%user}}', 'password');
        $this->dropTable('{{%user}}');
    }
}
