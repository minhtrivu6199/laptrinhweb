<?php

include_once './dbconnect.php'

include_once './models/InvoiceModel.php'

class InvoiceDAO{
    public  static function queryAll($sql){
        global $conn;

        $result = $conn->query($sql);

        $listProduct = array();

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

    public  static function findAllLimit($limit, $offset){
        $sql = "SELECT * FROM HOA_DON limit $offset, $limit "
        return InvoiceDAO::queryAll($sql);
    }

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

    public static function findByUserId($id){
        $sql = "SELECT * FROM HOA_DON where ND_Id='$id'"
        return InvoiceDAO::queryAll($sql);
    }

    public  static function findByTimeOpen($year, $month, $day){
        $sql = "SELECT * FROM HOA_DON where ND_Thoi_Gian_Mo='$year-$month-$day'";
        return InvoiceDAO::queryAll($sql);

    }


}