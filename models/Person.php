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

    public function getRelationships()
    {
        return $this->hasMany(Relationship::class, ['id' => 'relationship_id']);
    }
}
