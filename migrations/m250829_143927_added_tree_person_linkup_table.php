<?php

use yii\db\Migration;

class m250829_143927_added_tree_person_linkup_table extends Migration
{
	/**
	 * {@inheritdoc}
	 */
	public function safeUp()
	{
		$this->createTable('{{%tree_person}}', [
			'userId' => $this->primaryKey(),
		]);
		$this->addColumn('tree_person', 'tree_id', 'INT(11) NOT NULL');
		$this->addColumn('tree_person', 'person_id', 'INT(11) NOT NULL');
		$this->addForeignKey('fk_tree_person_tree', 'tree_person', 'tree_id', 'tree', 'id');
		$this->addForeignKey('fk_tree_person_person', 'tree_person', 'person_id', 'person', 'id');
	}

	/**
	 * {@inheritdoc}
	 */
	public function safeDown()
	{
		$this->dropForeignKey('fk_tree_person_tree', 'tree_person');
		$this->dropForeignKey('fk_tree_person_person', 'tree_person');
		$this->dropColumn('tree_person', 'tree_id');
		$this->dropColumn('tree_person', 'person_id');
		$this->dropTable('tree_person');
	}
}
