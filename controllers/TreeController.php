<?php

namespace app\controllers;

use yii\base\Controller;
use yii\web\NotFoundHttpException;
use app\models\Tree;
use Yii;
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
                        'actions' => ['index', 'create', 'update', 'delete', 'view'],
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

    public function actionView()
    {
        $slug = Yii::$app->request->get('slug');
        $model = Tree::findOne(['slug' => $slug]);

        if ($model === null) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }

        return $this->render('view', [
            'model' => $model
        ]);
    }
}
