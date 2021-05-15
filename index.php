<?php

include_once './models/UserModel.php';
include_once './services/InvoiceService.php';
include_once './services/ProductService.php';

include './prehandle/getCurrentUser.php';

	// if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
	// 	$uri = 'https://';
	// } else {
	// 	$uri = 'http://';
	// }
	// $uri .= $_SERVER['HTTP_HOST'];
	// header('Location: '.$uri.'/views/homepage.php');
	// exit;

	$invoice = InvoiceService::findCart();
if ($invoice != null) {
    $details = InvoiceService::getDetails($invoice->id);
    $products = array();
    foreach ($details as $index => $detail){
        $temp = ProductService::findById($detail->productId);
        $products[$index] = $temp;
    }
}

include './views/homepage.php';

