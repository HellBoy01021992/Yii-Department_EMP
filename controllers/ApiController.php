<?php

namespace app\controllers;

use app\models\Department;
use Yii;
use yii\rest\ActiveController;

class ApiController extends ActiveController
{
    public $modelClass = 'app\models\Employee';

    public function actions()
    {
        $actions = parent::actions();
        unset($actions['index']);
        return $actions;
    }

    public function actionIndex()
    {
        $departments = Department::find()->all();
        return $departments;
    }
}