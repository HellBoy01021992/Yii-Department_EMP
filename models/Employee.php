<?php

namespace app\models;

use yii\db\ActiveRecord;

class Employee extends ActiveRecord
{
    public static function tableName()
    {
        return 'employees';
    }

    public function getDepartment()
    {
        return $this->hasOne(Department::class, ['id' => 'department_id']);
    }
}