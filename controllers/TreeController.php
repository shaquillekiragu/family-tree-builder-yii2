<?php

namespace app\controllers;

use yii\base\Controller;
use app\models\Tree;

class TreeController extends Controller
{
    function actionIndex()
    {
        return $this->render("index");
    }
}
