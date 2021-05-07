<?php

include_once './services/BrandService.php';
include_once './services/ProductService.php';
include_once './models/UserModel.php';
include_once './prehandle/getCurrentUser.php';

$ds_thuonghieu = BrandService::findAll();
$ds_sanpham = ProductService::findAll();

include './views/product_list.php';