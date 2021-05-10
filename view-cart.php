<?php
include_once './models/UserModel.php';
include_once './services/BrandService.php';
include_once './services/InvoiceService.php';
include_once './services/ProductService.php';
include './prehandle/requireLogin.php';



$invoice = InvoiceService::findCart();
if ($invoice != null) {
    $details = InvoiceService::getDetails($invoice->id);
    $products = array();
    foreach ($details as $index => $detail){
        $products[$index] = ProductService::findById($detail->productId);
    }
    $total = InvoiceService::computeTotal($invoice->id);
}




include  './views/cart.php';