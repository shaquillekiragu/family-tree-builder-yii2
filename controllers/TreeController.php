<?php

namespace app\controllers;

use yii\base\Controller;
use app\models\Tree;

class TreeController extends Controller
{
    public function actionIndex()
    {
        return $this->render("index");
    }

    public function actionCreate()
    {
        return $this->render('create', [
            'model' => new Tree(),
        ]);
    }

    public function actionView()
    {
        $tree = Tree::findOne($id);
        return $this->render('view', [
            'model' => $tree,
        ]);
    }
}
