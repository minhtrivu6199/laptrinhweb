<?php

include_once dirname(__DIR__).'/dao/InvoiceDAO.php';
include_once dirname(__DIR__).'/dao/ProductDAO.php';

class InvoiceService {

    public static function findCart(){
        return InvoiceDAO::findNewestUncheckoutInvoice();
    }

    public static function addToCart($invoiceId, $productId, $amount){
        return InvoiceDAO::save($invoiceId, $productId, $amount);
    }

    public  static function createInvoice(){
        return InvoiceDAO::createEmpty();
    }

    public  static function computeTotal($invoiceId){
        $details = InvoiceDAO::findPurchaseDetailbyInvoice($invoiceId);
        $sum = 0;
        foreach ($details as $detail){
            $sum += $detail->amount * $detail->price;
        }
        return $sum;
    }

    public static function checkout(){
        $total = computeTotal($invoiceId);
        return InvoiceDAO::checkout($total);
    }
}