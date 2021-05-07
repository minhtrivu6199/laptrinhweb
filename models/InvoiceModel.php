<?php
class InvoiceModel{
    
    public $id;
    public $userId;
    public $createTime;
    public $closeTime;
    public $status;
    public $total;
    public $address;

    function __construct($data){
        $this->id = $data['HD_ID'];
        $this->userId = $data['ND_ID'];
        $this->createTime = $data['HD_THOI_GIAN_MO'];
        $this->closeTime = $data['HD_THOI_GIAN_DONG'];
        $this->status = $data['HD_TRANG_THAI'];
        $this->total = $data['HD_TONG_TIEN'];
        $this->address = $data['HD_DIA_CHI'];
    }
}