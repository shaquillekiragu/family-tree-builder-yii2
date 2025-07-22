<?php

use yii\db\Migration;

class m250722_134914_make_tree_table_fields_snake_case extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('tree', 'treeId', 'tree_id');
        $this->renameColumn('tree', 'userId', 'user_id');
        $this->renameColumn('tree', 'treeName', 'tree_name');
        $this->renameColumn('tree', 'treePassword', 'tree_password');
        $this->renameColumn('tree', 'createdBy', 'created_by');
        $this->renameColumn('tree', 'createdAt', 'created_at');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->renameColumn('tree', 'tree_id', 'treeId');
        $this->renameColumn('tree', 'user_id', 'userId');
        $this->renameColumn('tree', 'tree_name', 'treeName');
        $this->renameColumn('tree', 'tree_password', 'treePassword');
        $this->renameColumn('tree', 'created_by', 'createdBy');
        $this->renameColumn('tree', 'created_at', 'createdAt');
    }
}
