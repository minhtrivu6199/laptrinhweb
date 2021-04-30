<?php

include_once 'dbconnect.php';

include_once  dirname(__DIR__).'/models/ProductModel.php';

class ProductDAO{

    private  static function queryAll($sql){
        global $conn;

        $result = $conn->query($sql);

        $listProduct = array();

        while ($row = $result->fetch_assoc()){
            array_push($listProduct, new ProductModel($row));
        }

        return $listProduct;
    }

    private static function queryTop($sql){
        global $conn;

        $result = $conn->query($sql);

        if($result->num_rows > 0){
            //thanh cong
            $row = $result->fetch_assoc();
            return new ProductModel($row);
        }else{
            // that bai
            return null;
        }
    }

    public static function findById($id){
        $sql = "SELECT * FROM SAN_PHAM where SP_Id = $id";
        return ProductDAO::queryTop($sql);
    }

    public  static function findAll(){
        $sql = "SELECT * FROM SAN_PHAM";
        return ProductDAO::queryAll($sql);
    }

    public  static function findAllLimit($limit, $offset){
        $sql = "SELECT * FROM SAN_PHAM limit $offset, $limit ";
        return ProductDAO::queryAll($sql);
    }

    public  static function findAllByIds($listId){
        $result = array();
        foreach (listId as $id){
            $product = ProductDAO::findById($id);

            if($product != NULL){
                array_push($result, $product);
            }
        }
        return result;
    }

    public  static function sortByProduct(){
        $sql = "SELECT SP_Ten FROM SAN_PHAM ORDER BY SP_Ten ASC/DESC";
        return ProductDAO::queryAll($sql);
    }

    public  static function insertProduct($id, $name, $price, $status, $descripsion, $size){

        $sql = "INSERT TO SAN_PHAM(SP_Id, SP_Ten, SP_Gia, SP_Trang_Thai, SP_Mo_Ta, SP_Size) VALUES ('$id', '$name', '$price', '$status', '$descripsion', '$size') ";
        
        return ProductDAO::queryAll($sql);
    }

    public static function findQueryString($queryString){
        $sql = "SELECT * FROM SAN_PHAM WHERE SP_Ten like '%$queryString%'";
        return ProductDAO::queryAll($sql);
    }

   

}