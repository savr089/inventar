<?php

namespace app\controllers;

use yii\rest\ActiveController;

class InventController extends ActiveController
{
    public $modelClass = 'app\models\Invent';

    protected function verbs()
    {
        return [
            'index'  => [''],
            'view'   => [''],
            'create' => ['post'],
            'update' => ['get', 'put', 'post'],
            'delete' => [],
        ];
    }
}

