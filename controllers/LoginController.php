<?php

namespace app\controllers;

use app\models\LoginForm;
use Yii;
use yii\web\Controller;

class LoginController extends Controller
{
	public function actionIndex()
	{
		if (!Yii::$app->user->isGuest) {
			return $this->goHome();
		}
		$model = new LoginForm();

		if ($model->load(Yii::$app->request->post()) && $model->login()) {
			// var_dump(Yii::$app->user->identity);
			// die();
			return $this->redirect('/');
		}
		$model->password = '';

		return $this->render('index', [
			'model' => $model,
		]);
	}
}
