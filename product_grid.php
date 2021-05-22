<?php

include_once './services/BrandService.php';
include_once './services/ProductService.php';
include_once './services/InvoiceService.php';
include_once './models/UserModel.php';
include_once './prehandle/getCurrentUser.php';



$DEFAULT_PAGING_LIMIT = 12;
$NB_PAGE_SHOW = 12;

$ds_thuonghieu = BrandService::findAll();


if (isset($_GET['page']) && isset($_GET['limit'])) {
    $page = $_GET['page'];
    $limit = $_GET['limit'];
} else if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $limit = $DEFAULT_PAGING_LIMIT;
} else if (isset($_GET['limit'])) {
    $page = 1;
    $limit = $_GET['limit'];
} else {
    $page = 1;
    $limit = $DEFAULT_PAGING_LIMIT;
}

if (isset($_GET['brand'])) {
    $brand_code = $_GET['brand'];
    $ds_sanpham = ProductService::findAllByBrandLimit($brand_code, $page, $limit);        
    $total_page = ProductService::findTotalPageByBrand($brand_code, $limit);
} else {
    $ds_sanpham = ProductService::findAllLimit($page, $limit);    
    $total_page = ProductService::findTotalPage($limit);
}


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