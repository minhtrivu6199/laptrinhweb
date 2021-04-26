<?php

session_start();

if (isset($_SESSION['user'])){
	$user = $_SESSION['user'];
}

	// if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
	// 	$uri = 'https://';
	// } else {
	// 	$uri = 'http://';
	// }
	// $uri .= $_SERVER['HTTP_HOST'];
	// header('Location: '.$uri.'/views/homepage.php');
	// exit;


	include './views/homepage.php';

