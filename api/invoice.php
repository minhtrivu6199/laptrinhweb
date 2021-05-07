<?php
include_once '../models/UserModel.php';
include_once '../services/InvoiceService.php';
// include '../prehandle/requireLogin.php';

// if (isset($_GET['action']) && $_GET['action'] == 'list'){
//     $query = $_GET['queryString'];
//     $products = ProductService::searchProducts($query);
//     echo json_encode($products);
// }

if (isset($_POST['action']) && $_POST['action'] == 'add-to-cart'){
    $invoice = InvoiceService::findCart();
    if($invoice == null){
        $invoice = InvoiceService::createInvoice();
    }
    $productId = $_POST['productId'];
    $amount = $_POST['amount'];
    InvoiceService::addToCart($invoice->id, $productId, $amount);
}

if (isset($_POST['action']) && $_POST['action'] == 'change-amount'){
    $invoice = InvoiceService::findCart();
    if ($invoice == null){
        $invoice = InvoiceService::createInvoice();
    }
    $productId = $_POST['productId'];
    $amount = $_POST['amount'];
    InvoiceService::setAmount($invoice->id, $productId, $amount);
}

if (isset($_POST['action']) && $_POST['action'] == 'delete-product'){
    $invoice = InvoiceService::findCart();
    $productId = $_POST['productId'];
    InvoiceService::removeProduct($invoice->id, $productId);
}

// if (isset($_POST['action']) && $_POST['action'] == 'add-to-cart'){
//     $invoice = InvoiceService::findCart();
//     InvoiceService::checkout($invoice->id);
// }