<?php

include_once './services/BrandService.php';
include_once './services/ProductService.php';

$ds_thuonghieu = BrandService::findAll();
$ds_sanpham = ProductService::findAll();

include './views/product_list.php';