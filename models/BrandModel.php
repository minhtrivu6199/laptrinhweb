<?php

class BrandModel {
    public $id;
    public $name;
    public $code;

    function __construct($data){
        $this->id = $data['TH_ID'];
        $this->name = $data['TH_TEN'];
        $this->code = $data['TH_CODE'];
    }
}