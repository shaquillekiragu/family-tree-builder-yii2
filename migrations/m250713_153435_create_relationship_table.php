<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%relationship}}`.
 */
class m250713_153435_create_relationship_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%relationship}}', [
            'relationshipId' => $this->primaryKey(),
        ]);
        $this->addColumn('{{%relationship}}', 'treeId', 'int NOT NULL');
        $this->addColumn('{{%relationship}}', 'relationshipType', 'enum("father", "mother", "spouse", "brother", "sister", "son", "daughter") NOT NULL DEFAULT "spouse"');
        $this->addColumn('{{%relationship}}', 'personId', 'int NOT NULL');
        $this->addColumn('{{%relationship}}', 'relativeId', 'int NOT NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%relationship}}', 'treeId');
        $this->dropColumn('{{%relationship}}', 'relationshipType');
        $this->dropColumn('{{%relationship}}', 'personId');
        $this->dropColumn('{{%relationship}}', 'relativeId');
        $this->dropTable('{{%relationship}}');
    }
}
