<?php

use yii\db\Migration;

class m250722_142230_update_person_table_structure extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('person', 'order_index');
        $this->addColumn('person', 'created_at', 'int(11) NOT NULL');
        $this->addColumn('person', 'last_updated_at', 'int(11) NOT NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('person', 'order_index', 'int(8) NOT NULL DEFAULT "-1"');
        $this->dropColumn('person', 'created_at');
        $this->dropColumn('person', 'last_updated_at');
    }
}
