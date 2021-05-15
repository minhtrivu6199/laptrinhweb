<?php

include_once './services/BrandService.php';
include_once './services/ProductService.php';
include_once './services/InvoiceService.php';
include_once './models/UserModel.php';
include_once './prehandle/getCurrentUser.php';

$ds_thuonghieu = BrandService::findAll();
$ds_sanpham = ProductService::findAll();

$invoice = InvoiceService::findCart();
if ($invoice != null) {
    $details = InvoiceService::getDetails($invoice->id);
    $products = array();
    foreach ($details as $index => $detail){
        $temp = ProductService::findById($detail->productId);
        $products[$index] = $temp;
    }
}

include './views/product_list.php';