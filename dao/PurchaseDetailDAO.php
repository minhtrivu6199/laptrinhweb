<?php

include_once 'dbconnect.php';

include_once dirname(__DIR__).'/models/InvoiceModel.php';
include_once dirname(__DIR__).'/models/PurchaseDetailModel.php';
include_once dirname(__DIR__).'/dao/ProductDAO.php';

class PurchaseDetailDAO{
    private  static function queryAll($sql){
        global $conn;

        $result = $conn->query($sql);

        $list = array();

        while ($row = $result->fetch_assoc()){
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
        $sql = "SELECT * FROM CHI_TIET_HOA_DON where HD_ID = $invoiceId AND SP_ID = $productId";
        return PurchaseDetailDAO::queryTop($sql);
    }

    public  static function save($invoiceId, $productId, $amount) {
        global $conn;
        $detail = PurchaseDetailDAO::findById($invoiceId, $productId);
        $product = ProductDAO::findById($productId);
        $price = $product->price;
        if ($detail != NULL) {
            $sql = "UPDATE chi_tiet_hoa_don SET CTHD_SO_LUONG = $amount WHERE HD_ID = $invoiceId AND SP_ID = $productId";
        }else{
            $sql = "INSERT INTO chi_tiet_hoa_don(HD_ID, SP_ID, CTHD_SO_LUONG, CTHD_GIA) VALUES ($invoiceId, $productId, $amount, $price)"; 
        }
        // echo $sql;
        $result = $conn->query($sql);
        if ($result == TRUE) {
            return PurchaseDetailDAO::findById($invoiceId, $productId);
        }else{
            return NULL;
        }
        
    }

    public  static function findAllByInvoice($invoiceId){
        $sql = "SELECT * FROM CHI_TIET_HOA_DON WHERE HD_ID = '$invoiceId'";
        return PurchaseDetailDAO::queryAll($sql);
    }

    public  static function delete($invoiceId, $productId){
        global $conn;
        $detail = PurchaseDetailDAO::findById($invoiceId, $productId);
        $sql = "DELETE FROM CHI_TIET_HOA_DON where HD_ID = '$invoiceId' AND SP_Id = '$productId'";
        $result = $conn->query($sql);
        if ($result == true){
            return $detail;
        }else{
            return null;
        }
    }




}