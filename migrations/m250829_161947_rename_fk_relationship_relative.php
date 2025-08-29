<?php

use yii\db\Migration;

class m250829_161947_rename_fk_relationship_relative extends Migration
{
	/**
	 * {@inheritdoc}
	 */
	public function safeUp()
	{
		$this->dropForeignKey('fk_relationship_relative', 'relationship');
		$this->addForeignKey('fk_relationship_relative_person', 'relationship', 'relative_id', 'person', 'id', 'CASCADE', 'CASCADE');
	}

	/**
	 * {@inheritdoc}
	 */
	public function safeDown()
	{
		$this->dropForeignKey('fk_relationship_relative_person', 'relationship');
		$this->addForeignKey('fk_relationship_relative', 'relationship', 'relative_id', 'person', 'id', 'CASCADE', 'CASCADE');
	}
}
