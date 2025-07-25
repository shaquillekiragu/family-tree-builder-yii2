<?php

namespace app\controllers;

use yii\base\Controller;
use yii\web\NotFoundHttpException;
use app\models\Tree;
use yii\filters\AccessControl;

class TreeController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'actions' => ['index', 'create', 'update', 'delete'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['*'],
                        'allow' => false,
                    ]
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $trees = Tree::find()->all();
        return $this->render('index', [
            'trees' => $trees
        ]);
    }

    public function actionCreate(int $id = 0)
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
