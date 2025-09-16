<?php

use yii\db\Migration;

class m250916_191001_rename_updated_at_column_in_tree_table extends Migration
{
	/**
	 * {@inheritdoc}
	 */
	public function safeUp()
	{
		$this->renameColumn('tree', 'updated_at', 'last_updated_at');
	}

	/**
	 * {@inheritdoc}
	 */
	public function safeDown()
	{
		$this->renameColumn('tree', 'last_updated_at', 'updated_at');
	}
}
