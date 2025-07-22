<?php

use yii\db\Migration;

class m250722_152928_rename_all_primary_keys_to_id extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('user', 'user_id', 'id');
        $this->renameColumn('tree', 'tree_id', 'id');
        $this->renameColumn('person', 'person_id', 'id');
        $this->renameColumn('relationship', 'relationship_id', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->renameColumn('user', 'id', 'user_id');
        $this->renameColumn('tree', 'id', 'tree_id');
        $this->renameColumn('person', 'id', 'person_id');
        $this->renameColumn('relationship', 'id', 'relationship_id');
    }
}
