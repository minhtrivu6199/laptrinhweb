<?php

session_start();

include_once './models/UserModel.php';
include_once './services/UserService.php';
include_once './services/ProductService.php';
include_once './services/InvoiceService.php';
include_once './services/BrandService.php';

if (isset($_POST['action']) && $_POST['action'] == 'login'){
    $username = $_POST['email'];
    $password = $_POST['password'];
    $user = UserService::login($username, $password);
    if  ($user != null){
        $_SESSION['user'] = $user;
        header('Location: /index.php');
        die;
    }else{
        $error_message= "Đăng nhập thất bại";
    }
}

if (isset($_POST['action']) && $_POST['action'] == 'register'){
    $user = new UserModel(null);
    $user->email = $_POST['email'];
    $user->password = $_POST['password'];
    $user->fullname = $_POST['fullname'];
    $user->birthday = $_POST['birthday'];

    if  (UserService::register($user)){
        header('Location: /login.php');
        die;
    }else{
        $error_message= "Đăng ký thất bại";
    }
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


include_once './views/login.php';