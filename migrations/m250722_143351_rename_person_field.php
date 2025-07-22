<?php

use yii\db\Migration;

class m250722_143351_rename_person_field extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('person', 'sex', 'gender');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->renameColumn('person', 'gender', 'sex');
    }
}
