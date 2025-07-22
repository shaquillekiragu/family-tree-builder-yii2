<?php

use yii\db\Migration;

class m250722_105234_insert_tree_data_into_tree_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('tree', ['userId' => 1, 'treeName' => 'Demo Tree 1', 'treePassword' => 'password', 'createdBy' => 1, 'createdAt' => time()]);
        $this->delete('tree', ['treeName' => 'Demo Tree 1', 'treePassword' => 'password']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('tree', ['treeName' => 'Demo Tree 1', 'treePassword' => 'password']);
        $this->insert('tree', ['userId' => 1, 'treeName' => 'Demo Tree 1', 'treePassword' => 'password', 'createdBy' => 1, 'createdAt' => time()]);
    }
}
