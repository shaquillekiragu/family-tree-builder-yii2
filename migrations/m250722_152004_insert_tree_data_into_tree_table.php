<?php

use yii\db\Migration;

class m250722_152004_insert_tree_data_into_tree_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('tree', ['user_id' => 1, 'tree_name' => 'Demo Tree 1', 'tree_password' => 'password', 'created_at' => time(), 'updated_at' => time()]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('tree', ["tree_name" => 'Demo Tree 1']);
    }
}
