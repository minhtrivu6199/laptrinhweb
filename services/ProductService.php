<?php

include_once dirname(__DIR__).'/dao/ProductDAO.php';

class ProductService{
    public static function findAll(){
        return ProductDAO::findAll();
    }

    public  static function findById($id){
        return ProductDAO::findById($id);
    }

    public  static function searchProduct($key){
        return ProductDAO::findQueryString($key);
    }
}