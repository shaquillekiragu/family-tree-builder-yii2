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
}
