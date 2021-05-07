<?php
class PurchaseDetailModel{
    
    public $id;
    public $productId;
    public $amount;
    public $price;

    function __construct($data){
        $this->id = $data['HD_ID'];
        $this->productId = $data['SP_ID'];
        $this->amount = $data['CTHD_SO_LUONG'];
        $this->price = $data['CTHD_GIA'];
    }
}