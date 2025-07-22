<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%user}}`.
 */
class m250722_141156_add_columns_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'created_at', 'int(11) NOT NULL');
        $this->addColumn('user', 'last_updated_at', 'int(11) NOT NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('user', 'created_at');
        $this->dropColumn('user', 'last_updated_at');
    }
}
