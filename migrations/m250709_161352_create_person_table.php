<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%person}}`.
 */
class m250709_161352_create_person_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%person}}', [
            'personId' => $this->primaryKey(),
        ]);
        $this->addColumn('{{%person}}', 'treeId', 'int NOT NULL');
        $this->addColumn('{{%person}}', 'firstName', 'varchar(25) NOT NULL');
        $this->addColumn('{{%person}}', 'middleNames', 'varchar(50)');
        $this->addColumn('{{%person}}', 'lastName', 'varchar(25) NOT NULL');
        $this->addColumn('{{%person}}', 'sex', 'enum("male", "female") NOT NULL DEFAULT "male"');
        $this->addColumn('{{%person}}', 'dateOfBirth', 'date NOT NULL');
        $this->addColumn('{{%person}}', 'placeOfBirth', 'varchar(50) NOT NULL');
        $this->addColumn('{{%person}}', 'countryOfBirth', 'varchar(50) NOT NULL');
        $this->addColumn('{{%person}}', 'isPrimaryPerson', 'boolean NOT NULL');
        $this->addColumn('{{%person}}', 'generationIndex', 'int(8) NOT NULL DEFAULT "0"');
        $this->addColumn('{{%person}}', 'orderIndex', 'int(8) NOT NULL DEFAULT "-1"');
        $this->addColumn('{{%person}}', 'biography', 'varchar(10000)');
        $this->addColumn('{{%person}}', 'notes', 'varchar(10000)');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%person}}', 'treeId');
        $this->dropColumn('{{%person}}', 'firstName');
        $this->dropColumn('{{%person}}', 'middleNames');
        $this->dropColumn('{{%person}}', 'lastName');
        $this->dropColumn('{{%person}}', 'sex');
        $this->dropColumn('{{%person}}', 'dateOfBirth');
        $this->dropColumn('{{%person}}', 'placeOfBirth');
        $this->dropColumn('{{%person}}', 'countryOfBirth');
        $this->dropColumn('{{%person}}', 'isPrimaryPerson');
        $this->dropColumn('{{%person}}', 'generationIndex');
        $this->dropColumn('{{%person}}', 'orderIndex');
        $this->dropColumn('{{%person}}', 'biography');
        $this->dropColumn('{{%person}}', 'notes');
        $this->dropTable('{{%person}}');
    }
}
