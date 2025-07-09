<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tree}}`.
 */
class m250709_155655_create_tree_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tree}}', [
            'treeId' => $this->primaryKey(),
        ]);
        $this->addColumn('tree', 'userId', 'int NOT NULL');
        $this->addColumn('tree', 'treeName', 'varchar(50) NOT NULL');
        $this->addColumn('tree', 'treePassword', 'varchar(25) NOT NULL');
        $this->addColumn('tree', 'createdBy', 'int NOT NULL');
        $this->addColumn('tree', 'createdAt', 'int(11) NOT NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('tree', 'userId');
        $this->dropColumn('tree', 'treeName');
        $this->dropColumn('tree', 'treePassword');
        $this->dropColumn('tree', 'createdBy');
        $this->dropColumn('tree', 'createdAt');
        $this->dropTable('{{%tree}}');
    }
}
