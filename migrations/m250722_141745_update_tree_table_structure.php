<?php

use yii\db\Migration;

class m250722_141745_update_tree_table_structure extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('tree', 'created_by');
        $this->addColumn('tree', 'updated_at', 'int(11) NOT NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('tree', 'created_by', 'int NOT NULL');
        $this->dropColumn('tree', 'updated_at');
    }
}
