<?php

use yii\db\Migration;

class m250829_150535_create_foreign_keys_for_existing_tables extends Migration
{
	/**
	 * {@inheritdoc}
	 */
	public function safeUp()
	{
		$this->addForeignKey('fk_tree_user', 'tree', 'user_id', 'user', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('fk_person_tree', 'person', 'tree_id', 'tree', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('fk_relationship_tree', 'relationship', 'tree_id', 'tree', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('fk_relationship_person', 'relationship', 'person_id', 'person', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('fk_relationship_relative', 'relationship', 'relative_id', 'person', 'id', 'CASCADE', 'CASCADE');
	}

	/**
	 * {@inheritdoc}
	 */
	public function safeDown()
	{
		$this->dropForeignKey('fk_tree_user', 'tree');
		$this->dropForeignKey('fk_person_tree', 'person');
		$this->dropForeignKey('fk_relationship_tree', 'relationship');
		$this->dropForeignKey('fk_relationship_person', 'relationship');
		$this->dropForeignKey('fk_relationship_relative', 'relationship');
	}
}
