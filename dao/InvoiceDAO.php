<?php

include_once 'dbconnect.php';

include_once dirname(__DIR__).'/models/InvoiceModel.php';
include_once dirname(__DIR__).'/models/UserModel.php';
include_once dirname(__DIR__).'/models/PurchaseDetailModel.php';

include dirname(__DIR__).'/prehandle/getCurrentUser.php';

class InvoiceDAO{
    private  static function queryAll($sql){
        global $conn;

        $result = $conn->query($sql);

        $listInvoice = array();

        while ($row = $conn->fetch_assoc()){
            array_push($listInvoice, new InvoiceModel($row));
        }

        return $listInvoice;
    }

    private static function queryTop($sql){
        global $conn;

        $result = $conn->query($sql);

        if($result->num_rows > 0){
            //thanh cong
            $row = $result->fetch_assoc();
            return new InvoiceModel($row);
        }else{
            // that bai
            return null;
        }
    }

    public static function findById($id){
        $sql = "SELECT * FROM HOA_DON where HD_Id = $id";
        return InvoiceDAO::queryTop($sql);
    }

    public  static function findAll(){
        $sql = "SELECT * FROM HOA_DON";
        return InvoiceDAO::queryAll($sql);
    }

    // public  static function findAllLimit($limit, $offset){
    //     $sql = "SELECT * FROM HOA_DON limit $offset, $limit "
    //     return InvoiceDAO::queryAll($sql);
    // }

    public  static function findAllByIds($listId){
        $result = array();
        foreach (listId as $id){
            $invoice = InvoiceDAO::findById($id);

            if($product != NULL){
                array_push($result, $invoice);
            }
        }
        return result;
    }

    // public static function findByUserId($id){
    //     $sql = "SELECT * FROM HOA_DON where ND_Id='$id'"
    //     return InvoiceDAO::queryAll($sql);
    // }

    public  static function findByTimeOpen($year, $month, $day){
        $sql = "SELECT * FROM HOA_DON where ND_Thoi_Gian_Mo='$year-$month-$day'";
        return InvoiceDAO::queryAll($sql);

    }

    public  static function findNewestUncheckoutInvoice(){
        global $user;
        $sql = "SELECT * FROM HOA_DON where HD_TRANG_THAI = 'new' ORDER BY HD_THOI_GIAN_MO DESC";
        return InvoiceDAO::queryTop($sql);
    }

    public  static function createEmpty(){
        global $conn;
        global $user;
        $sql = "INSERT INTO HOA_DON(ND_ID, HD_THOI_GIAN_MO, HD_TRANG_THAI) values ($user->id, CURDATE(), 'new');";
        $result = $conn->query($sql);
        if ($result == TRUE) {
            $sql = "SELECT LAST_INSERT_ID() as ID;";
            $result = $conn->query($sql);
            $insertedId = $result->fetch_assoc()['id'];
            return InvoiceDAO::findById($insertedId);
        }else{
            return NULL;
        }
    }

    public  static function close($invoiceId, $address, $total){
        global $conn;
        $sql = "UPDATE HOA_DON SET HD_THOI_GIAN_DONG = CURDATE(), HD_TRANG_THAI = 'closed', HD_TONG_TIEN = '$total', HD_DIA_CHI = '$address' WHERE HD_ID = '$invoiceId'";
        $result = $conn->query($sql);
        if ($result == true){
            return InvoiceDAO::findById($invoiceId);
        }else{
            return NULL;
        }
    }


}