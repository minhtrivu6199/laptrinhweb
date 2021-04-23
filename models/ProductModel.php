<?php
class ProductModel {
    public $id;
    public $name;
    public $price;
    public $status;
    public $description;
    public $size;

    function __construct($data){
        $this->id = $data['SP_Id'];
        $this->name = $data['SP_Ten']; 
        $this->price = $data['SP_Gia'];
        $this->status = $data['SP_Trang_Thai'];
        $this->description = $data['SP_Mo_Ta'];
        $this->size = $data['SP_Size'];

    }
}