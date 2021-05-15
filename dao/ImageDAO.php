<?php

include_once 'dbconnect.php';

include_once dirname(__DIR__).'/models/ImageModel.php';

class ImageDAO {

    private static function queryAll($sql){
        global $conn;
        $result = $conn->query($sql);

        $listImg = array();

        while ($row = $result->fetch_assoc()){
            array_push($listImg, new ImageModel($row));
        }

        return $listImg;
    }

    private static function queryTop($sql){
        global $conn;

        $result = $conn->query($sql);

        if($result->num_rows > 0){
            //thanh cong
            $row = $result->fetch_assoc();
            return new ImageModel($row);
        }else{
            // that bai
            return null;
        }
    }
        

    public static function findById($id){
        $sql = "SELECT * FROM HINH_ANH where SP_ID = $id";
        return ImageDAO::queryTop($sql);
    }
}