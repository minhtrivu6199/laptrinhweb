<?php

include_once './dao/ProductDAo.php'

class ProductService{
    public static function findAll(){
        return ProductDAO::findAll();
    }
}