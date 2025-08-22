<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\helpers\Inflector;
use app\models\Person;

class Tree extends ActiveRecord
{
    public $tree_id_list;

    public static function tableName()
    {
        return 'tree';
    }

    public function getPersons()
    {
        return $this->hasMany(Person::class, ['id' => 'person_id']); // Turn into a many-to-many relation - which REQUIRES a linkup table
    }

    public function beforeValidate()
    {
        $this->slug = Inflector::slug($this->tree_name);

        return parent::beforeValidate();
    }
}
