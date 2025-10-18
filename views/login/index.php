<?php

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<main class="site-login w-full h-full min-h-screen flex flex-col items-center  bg-gradient-to-br from-0% from-purple-900 via-60% via-purple-800 to-100% to-purple-600 p-40">
	<h1 class=""><?= Html::encode($this->title) ?></h1>
	<p class="">Please fill out the following fields to login:</p>

	<div class="w-full flex flex-col items-center">
		<?php $form = ActiveForm::begin([
			'id' => 'login-form',
			'fieldConfig' => [
				'template' => "{label}\n{input}\n{error}",
				'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
				'inputOptions' => ['class' => 'col-lg-3 form-control'],
				'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
			],
		]); ?>

		<?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

		<?= $form->field($model, 'password')->passwordInput() ?>

		<?= $form->field($model, 'rememberMe')->checkbox([
			'template' => "<div class=\"custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
		]) ?>

		<div class="form-group">
			<?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
		</div>

		<?php ActiveForm::end(); ?>

		<div style="color:#999;">
			You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br>
			To modify the email/password, please check out the code <code>app\models\User::$users</code>.
		</div>
	</div>
</main>