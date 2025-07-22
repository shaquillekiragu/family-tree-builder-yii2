<?php

use yii\db\Migration;

class m250722_133922_make_user_table_fields_snake_case extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('user', 'userId', 'user_id');
        $this->renameColumn('user', 'firstName', 'first_name');
        $this->renameColumn('user', 'middleNames', 'middle_names');
        $this->renameColumn('user', 'lastName', 'last_name');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->renameColumn('user', 'user_id', 'userId');
        $this->renameColumn('user', 'first_name', 'firstName');
        $this->renameColumn('user', 'middle_names', 'middleNames');
        $this->renameColumn('user', 'last_name', 'lastName');
    }
}
