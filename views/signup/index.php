<?php

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>

<main class="site-login w-full h-full min-h-screen flex flex-col items-center  bg-gradient-to-br from-0% from-purple-900 via-60% via-purple-800 to-100% to-purple-600 p-40">
	<h1><?= Html::encode($this->title) ?></h1>

	<p>Please fill out the following fields to register and sign in:</p>

	<div class="row">
		<div class="col-lg-5">

			<?php $form = ActiveForm::begin([
				'id' => 'signup-form',
				'fieldConfig' => [
					'template' => "{label}\n{input}\n{error}",
					'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
					'inputOptions' => ['class' => 'col-lg-3 form-control'],
					'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
				],
			]); ?>



			<div class="form-group">
				<div>
					<?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
				</div>
			</div>

			<?php ActiveForm::end(); ?>

		</div>
	</div>
</main>

<?php

// <?= $form->field($model, 'first_name')->textInput(['autofocus' => true])

// <?= $form->field($model, 'middle_names')->textInput(['autofocus' => true])

// <?= $form->field($model, 'last_name')->textInput(['autofocus' => true])

// <?= $form->field($model, 'email')->textInput(['autofocus' => true])

// <?= $form->field($model, 'password')->passwordInput()

// <?= $form->field($model, 'rememberMe')->checkbox([
// 	'template' => "<div class=\"custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
// ])
