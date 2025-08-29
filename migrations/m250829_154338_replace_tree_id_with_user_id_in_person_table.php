<?php

use yii\db\Migration;

class m250829_154338_replace_tree_id_with_user_id_in_person_table extends Migration
{
	/**
	 * {@inheritdoc}
	 */
	public function safeUp()
	{
		$this->dropForeignKey('fk_person_tree', 'person');
		$this->dropColumn('person', 'tree_id');
		$this->addColumn('person', 'user_id', 'int NOT NULL');
		$this->addForeignKey('fk_person_user', 'person', 'user_id', 'user', 'id', 'CASCADE', 'CASCADE');
	}

	/**
	 * {@inheritdoc}
	 */
	public function safeDown()
	{
		$this->dropForeignKey('fk_person_user', 'person');
		$this->dropColumn('person', 'user_id');
		$this->addColumn('person', 'tree_id', 'int NOT NULL');
		$this->addForeignKey('fk_person_tree', 'person', 'tree_id', 'tree', 'id', 'CASCADE', 'CASCADE');
	}
}
