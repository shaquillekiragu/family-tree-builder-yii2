<?php

use yii\db\Migration;

class m250722_135549_make_relationship_table_fields_snake_case extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('relationship', 'relationshipId', 'relationship_id');
        $this->renameColumn('relationship', 'treeId', 'tree_id');
        $this->renameColumn('relationship', 'relationshipType', 'relationship_type');
        $this->renameColumn('relationship', 'personId', 'person_id');
        $this->renameColumn('relationship', 'relativeId', 'relative_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->renameColumn('relationship', 'relationship_id', 'relationshipId');
        $this->renameColumn('relationship', 'tree_id', 'treeId');
        $this->renameColumn('relationship', 'relationship_type', 'relationshipType');
        $this->renameColumn('relationship', 'person_id', 'personId');
        $this->renameColumn('relationship', 'relative_id', 'relativeId');
    }
}
