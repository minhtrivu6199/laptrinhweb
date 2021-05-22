<?php

include_once dirname(__DIR__).'/dao/ProductDAO.php';
include_once dirname(__DIR__).'/dao/BrandDAO.php';

class ProductService{
    public static function findAll(){
        return ProductDAO::findAll();
    }

    public  static function findById($id){
        return ProductDAO::findById($id);
    }

    public  static function searchProducts($key){
        return ProductDAO::findQueryString($key);
    }

    public static function findAllLimit($page, $limit) {
        return ProductDAO::findAllLimit(($page-1)*$limit, $limit);
    }

    public static function findTotalPage($limit) {
        $product_count = ProductDAO::count();
        $total_page = $product_count / $limit;
        $total_page = (int) $total_page;
        return $total_page + ((($product_count % $limit) > 0)? 1: 0);
    }

    public static function findAllByBrandLimit($brand_code, $page, $limit) {
        $brand = BrandDAO::findOneByCode($brand_code);
        return ProductDAO::findAllByBrandLimit($brand, ($page-1)*$limit, $limit);
    }

    public static function findTotalPageByBrand($brand_code, $limit) {
        $brand = BrandDAO::findOneByCode($brand_code);
        $product_count = ProductDAO::countByBrandGroupByName($brand);
        $total_page = $product_count / $limit;
        $total_page = (int) $total_page;
        return $total_page + ((($product_count % $limit) > 0)? 1: 0);
    }


}
