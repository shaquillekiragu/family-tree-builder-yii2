<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\helpers\Inflector;
use app\models\Person;
use app\models\Relationship;

class Tree extends ActiveRecord
{
    public $tree_id_list;

    public static function tableName()
    {
        return 'tree';
    }

    public function getSlug()
    {
        return Inflector::slug($this->tree_name);
    }

    public function getPersons()
    {
        return $this->hasMany(Person::class, ['id' => 'person_id']);
    }
}
