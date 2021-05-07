<?php

include_once './models/UserModel.php';

include './prehandle/getCurrentUser.php';

	// if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
	// 	$uri = 'https://';
	// } else {
	// 	$uri = 'http://';
	// }
	// $uri .= $_SERVER['HTTP_HOST'];
	// header('Location: '.$uri.'/views/homepage.php');
	// exit;

include './views/homepage.php';

