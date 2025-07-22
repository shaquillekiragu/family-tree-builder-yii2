<?php

use yii\db\Migration;

class m250722_135306_make_person_table_fields_snake_case extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('person', 'personId', 'person_id');
        $this->renameColumn('person', 'treeId', 'tree_id');
        $this->renameColumn('person', 'firstName', 'first_name');
        $this->renameColumn('person', 'middleNames', 'middle_names');
        $this->renameColumn('person', 'lastName', 'last_name');
        $this->renameColumn('person', 'dateOfBirth', 'date_of_birth');
        $this->renameColumn('person', 'placeOfBirth', 'place_of_birth');
        $this->renameColumn('person', 'countryOfBirth', 'country_of_birth');
        $this->renameColumn('person', 'isPrimaryPerson', 'is_primary_person');
        $this->renameColumn('person', 'generationIndex', 'generation_index');
        $this->renameColumn('person', 'orderIndex', 'order_index');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->renameColumn('person', 'person_id', 'personId');
        $this->renameColumn('person', 'tree_id', 'treeId');
        $this->renameColumn('person', 'first_name', 'firstName');
        $this->renameColumn('person', 'middle_names', 'middleNames');
        $this->renameColumn('person', 'last_name', 'lastName');
        $this->renameColumn('person', 'date_of_birth', 'dateOfBirth');
        $this->renameColumn('person', 'place_of_birth', 'placeOfBirth');
        $this->renameColumn('person', 'country_of_birth', 'countryOfBirth');
        $this->renameColumn('person', 'is_primary_person', 'isPrimaryPerson');
        $this->renameColumn('person', 'generation_index', 'generationIndex');
        $this->renameColumn('person', 'order_index', 'orderIndex');
    }
}
