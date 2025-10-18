<?php

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
$this->beginPage()
?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
	<title><?= Html::encode($this->title) ?></title>
	<script src="https://cdn.tailwindcss.com"></script>
	<?php $this->head() ?>
</head>

<body class="!w-screen !min-h-screen">
	<?php $this->beginBody() ?>

	<header id="header" class="w-full">
		<?php
		NavBar::begin([
			'brandLabel' => Yii::$app->name,
			'brandUrl' => Yii::$app->homeUrl,
			'options' => ['class' => 'navbar-expand-md navbar-dark bg-dark fixed-top']
		]);
		echo Nav::widget([
			'options' => ['class' => 'navbar-nav'],
			'items' => [
				['label' => 'Home', 'url' => ['/site/index']],
				['label' => 'About', 'url' => ['/site/about']],
				['label' => 'Contact', 'url' => ['/site/contact']],
				Yii::$app->user->isGuest
					? ['label' => 'Login/Signup', 'url' => ['/site/login']]
					: '<li class="nav-item">'
					. Html::beginForm(['/site/logout'])
					. Html::submitButton(
						'Logout (' . Yii::$app->user->identity->email . ')',
						['class' => 'nav-link btn btn-link logout']
					)
					. Html::endForm()
					. '</li>',
				['label' => 'Your Trees', 'url' => ['/trees']],
				['label' => 'Create Tree', 'url' => ['/create-tree']],
				['label' => 'Tree 1', 'url' => ['/trees/DemoTree1']],
			]
		]);
		NavBar::end();
		?>
	</header>

	<main id="main" class="w-full flex-shrink-0" role="main">
		<?php if (!empty($this->params['breadcrumbs'])): ?>
			<?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
		<?php endif ?>
		<?= Alert::widget() ?>
		<?= $content ?>
	</main>

	<footer id="footer" class="w-full flex justify-between px-8 py-4 bg-black **:!text-white">
		<div class="w-full">
			<div class="text-center">&copy; My Company <?= date('Y') ?></div>
			<div class="text-center"><?= Yii::powered() ?></div>
		</div>
	</footer>

	<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>