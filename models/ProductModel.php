<?php
class ProductModel {
    public $id;
    public $name;
    public $brandId;
    public $price;
    public $status;
    public $description;
    public $size;

    function __construct($data){
        $this->id = $data['SP_ID'];
        $this->name = $data['SP_TEN'];
        $this->brandId = $data['TH_ID']; 
        $this->price = $data['SP_GIA'];
        $this->status = $data['SP_TRANG_THAI'];
        $this->description = $data['SP_MO_TA'];
        $this->size = $data['SP_SIZE'];
    }
}