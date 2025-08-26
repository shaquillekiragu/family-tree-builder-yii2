<?php

namespace app\models;

use yii\db\ActiveRecord;
use app\models\Relationship;

class Person extends ActiveRecord
{
	public $person_id_list;

	public static function tableName()
	{
		return 'person';
	}

	public function rules()
	{
		return [
			[
				['tree_id', 'first_name', 'last_name', 'gender', 'date_of_birth', 'place_of_birth', 'country_of_birth', 'is_primary_person', 'generation_index', 'created_at', 'last_updated_at'],
				'required'
			],
			[
				['tree_id', 'is_primary_person', 'generation_index', 'created_at', 'last_updated_at'],
				'integer'
			],
			[
				['date_of_birth'],
				'date',
				'format' => 'php:d-m-Y'
			],
			[
				['biography', 'notes'],
				'string'
			],
			[
				['first_name', 'last_name'],
				'string',
				'max' => 25
			],
			[
				['middle_names', 'place_of_birth', 'country_of_birth'],
				'string',
				'max' => 50
			],
			[
				['gender'],
				'in',
				'range' => ['male', 'female']
			]
		];
	}

	public function getTree()
	{
		return $this->hasOne(Tree::class, ['id' => 'tree_id']);
	}

	public function getRelationships()
	{
		return $this->hasMany(Relationship::class, ['id' => 'relationship_id']);
	}
}
