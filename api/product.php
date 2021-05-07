<?php
include_once '../services/ProductService.php';

if (isset($_GET['action']) && $_GET['action'] == 'list') {
    $query = $_GET['queryString'];
    $product = ProductService::searchProducts($query);
    echo json_encode($product);
}

if (isset($_POST['action']) && $_POST['action'] == 'delete'){
    echo "delete api is working";
}