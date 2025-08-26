<?php

namespace app\models;

use yii\db\ActiveRecord;

class Relationship extends ActiveRecord
{
	public $relationship_id_list;

	public static function tableName()
	{
		return 'relationship';
	}

	public function rules()
	{
		return [
			[
				['tree_id', 'relationship_id', 'person_id', 'relative_id'],
				'required'
			],
			[
				['tree_id', 'person_id', 'relative_id'],
				'integer'
			],
			[
				['relationship_type'],
				'in',
				'range' => ['father', 'mother', 'spouse', 'brother', 'sister', 'son', 'daughter']
			]
		];
	}

	public function getPersons()
	{
		$this->hasMany(Person::class, ['id' => 'person_id']);
	}
}
