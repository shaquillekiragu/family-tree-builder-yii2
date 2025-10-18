<?php
$this->title = 'My Yii Application';
?>

<main class="site-index w-full h-full min-h-screen flex flex-col items-center gap-28 bg-gradient-to-br from-0% from-purple-900 via-60% via-purple-800 to-100% to-purple-600 p-40">
	<div class="w-full flex flex-col items-center gap-4 text-center text-white">
		<h1 class="text-4xl font-bold">Welcome to the Family Tree Builder</h1>
		<h2 class="text-2xl">Build and explore <span class="underline">your family tree</span></h2>
	</div>

	<div class="w-full flex flex-col items-center gap-3 *:text-lg">
		<h3 class="text-white mb-3">Login or register to get started...</h3>
		<a href="/login" class="bg-white rounded-full w-40 py-3 text-center">Login</a>
		<p class="text-white">or</p>
		<a href="/signup" class="bg-white rounded-full w-40 py-3 text-center">Sign up</a>
	</div>
</main>