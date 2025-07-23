<?php

namespace app\models;

use yii\db\ActiveRecord;

class Person extends ActiveRecord
{
    public $person_id_list;

    public static function tableName()
    {
        return 'person';
    }
}
