<?php

include_once './dbconnect.php';

include_once dirname(__DIR__).'/models/InvoiceModel.php';
include_once dirname(__DIR__).'/models/PurchaseDetailModel.php';

class PurchaseDetailDAO{
    private  static function queryAll($sql){
        global $conn;

        $result = $conn->query($sql);

        $list = array();

        while ($row = $conn->fetch_assoc()){
            array_push($list, new PurchaseDetailModel($row));
        }

        return $list;
    }

    private static function queryTop($sql){
        global $conn;

        $result = $conn->query($sql);

        if($result->num_rows > 0){
            //thanh cong
            $row = $result->fetch_assoc();
            return new PurchaseDetailModel($row);
        }else{
            // that bai
            return null;
        }
    }

    public static function findById($invoiceId, $productId){
        $sql = "SELECT * FROM chi_tiet_hoa_don where HD_Id = '$invoiceId' AND SP_Id = '$productId'";
        return PuschaseDetailDAO::queryTop($sql);
    }

    public  static function save($invoiceId, $productId, $amount) {
        global $conn;
        $detail = PuschaseDetailDAO::findById($invoiceId, $productId);
        $product = ProductDAO::findById($productId);
        $price = $product->price;
        if ($detail != NULL) {
            $sql = "UPDATE * FROM chi_tiet_hoa_don SET CTHD_SO_LUONG = '$amount' WHERE HD_Id = '$invoiceId' AND SP_Id = '$productId'";
        }else{
            $sql = "INSERT INTO chi_tiet_hoa_don(HD_ID, SP_ID, CTHD_SO_LUONG, CTHD_GIA) VALUES ($invoiceId, $productId, $amount, $price)"; 
        }
        $result = $conn->query($sql);
        
    }




}