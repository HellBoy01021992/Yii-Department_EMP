<?php

namespace app\models;

use yii\db\ActiveRecord;

class Department extends ActiveRecord
{
    public static function tableName()
    {
        return 'departments';
    }
}