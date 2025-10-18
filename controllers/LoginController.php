<?php

namespace app\controllers;

use yii\web\Controller;

class LoginController extends Controller
{
	public function behaviors()
	{
		return [];
	}

	public function actions()
	{
		return [];
	}

	public function actionIndex()
	{
		return $this->render('index');
	}
}
