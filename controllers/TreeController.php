<?php

namespace app\controllers;

use yii\base\Controller;
use yii\web\NotFoundHttpException;
use app\models\Tree;

class TreeController extends Controller
{
    public function actionIndex()
    {
        $trees = Tree::find()->all();
        return $this->render('index', [
            'trees' => $trees
        ]);
    }

    public function actionCreate()
    {
        return $this->render('create', [
            'model' => new Tree(),
        ]);
    }

    public function actionView($slug)
    {
        $model = Tree::findOne(['slug' => $slug]) ? Tree::findOne(['slug' => $slug]) : Tree::findOne(['tree_name' => str_replace(' ', '', $slug)]);

        if ($model === null) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }

        return $this->render('view', [
            'model' => $model
        ]);
    }
}
