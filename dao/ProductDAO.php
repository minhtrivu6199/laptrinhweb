<?php

include_once 'dbconnect.php';

include_once  dirname(__DIR__).'/models/ProductModel.php';

class ProductDAO{

    private  static function queryAll($sql){
        global $conn;

        $result = $conn->query($sql);

        $listProduct = array();

        while ($row = $result->fetch_assoc()){
            $product = new ProductModel($row);
            $sql = "SELECT * FROM hinh_anh WHERE SP_ID = $product->id";
            $images_result = $conn->query($sql);
            $images = array();
            while ($image_row = $images_result->fetch_assoc()) {
                $imageLink = $image_row['HA_LINK'];
                array_push($images, $imageLink);
            }
            $product->images = $images;
            array_push($listProduct, $product);
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
        $sql = "SELECT * FROM SAN_PHAM where SP_ID = $id";
        return ProductDAO::queryTop($sql);
    }

    public  static function findAll(){
        $sql = "SELECT * FROM SAN_PHAM";
        return ProductDAO::queryAll($sql);
    }

    public static function findQueryString($queryString){
        $sql = "SELECT * FROM SAN_PHAM WHERE SP_TEN like '%$queryString%'";
        return ProductDAO::queryAll($sql);
    }

    public static function findAllLimit($offset, $limit) {
        $sql = "SELECT * FROM SAN_PHAM LIMIT $limit OFFSET $offset";
        return ProductDAO::queryAll($sql);
    }

    public static function count() {
        global $conn;
        $sql = "SELECT COUNT(*) as nb FROM SAN_PHAM";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            return $result->fetch_assoc()['nb'];
        }
        return 0;
    }

    public  static function findByBrandId($brandId){
        
    }

    public static function countByBrandGroupByName($brand) {
        global $conn;
        $brand_id = $brand->id;
        $sql = "SELECT * FROM SAN_PHAM GROUP BY SP_TEN HAVING TH_ID = $brand_id";
        $result = $conn->query($sql);
        $count = 0;
        while ($row = $result->fetch_assoc()) { 
            $count++;
        }
        return $count;
    }

    public static function findAllByBrandLimit($brand, $offset, $limit) {
        $brand_id = $brand->id;
        $sql = "SELECT * FROM SAN_PHAM WHERE TH_ID = $brand_id GROUP BY SP_TEN ORDER BY SP_ID LIMIT $limit OFFSET $offset";
        return ProductDAO::queryAll($sql);
    }


   

}