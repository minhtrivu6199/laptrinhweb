<?php

include_once 'dbconnect.php';

include_once dirname(__DIR__).'/models/BrandModel.php';

class BrandDAO {

    private static function queryAll($sql){
        global $conn;
        $result = $conn->query($sql);

        $listBrand = array();

        while ($row = $result->fetch_assoc()){
            array_push($listBrand, new BrandModel($row));
        }

        return $listBrand;
    }

    private static function queryTop($sql){
        global $conn;

        $result = $conn->query($sql);

        if($result->num_rows > 0){
            //thanh cong
            $row = $result->fetch_assoc();
            return new BrandModel($row);
        }else{
            // that bai
            return null;
        }
    }
        
    public  static function findAll(){
        $sql = "SELECT * FROM THUONG_HIEU";
        return BrandDAO::queryAll($sql);
    }
}