<?php

function generateRandomString($length = 10)
{
	return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
		ceil($length / strlen($x)))), 1, $length);
}

require_once('store.php');

require_once('views/base/header.php');

?>

<!-- Preloader -->
<div id="overlay">
    <div id="progstat"></div>
    <div id="progress"></div>
    <div class="logo" style="background-image:url('images/icon/logo/logo.png');"></div>
</div>

<?php

$sections = [
	'intro',
    'feedback',
    'about',
    'questions',
    'catalog',
    'reviews',
    'contacts'
];

foreach ($sections as $section) {
	include(__DIR__ . '/views/sections/' . $section . '.php');
}

require_once('views/base/footer.php');