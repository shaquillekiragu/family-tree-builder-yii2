<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%tree}}`.
 */
class m250725_160603_add_slug_column_to_tree_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('tree', 'slug', 'varchar(255) NOT NULL UNIQUE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('tree', 'slug');
    }
}
