<?php

use yii\db\Migration;

class m250724_134223_insert_first_user_into_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('user', ['first_name' => 'John', 'last_name' => 'Doe', 'email' => 'JohnDoe@gmail.com', 'password' => 'password', 'created_at' => time(), 'last_updated_at' => time()]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('user', ['email' => 'JohnDoe@gmail.com']);
    }
}
