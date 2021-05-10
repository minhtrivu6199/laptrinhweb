<?php

include_once dirname(__DIR__).'/dao/BrandDAO.php';

class BrandService {

    public static function findAll(){
        return BrandDAO::findAll();
    }
    
    public static function findById($id){
        return BrandDAO::findById($id);
    }
}