<?php

class ImageModel {
    public $id;
    public $spId;
    public $link;
    public $name;

    function __construct($data){
        $this->id = $data['HA_ID'];
        $this->spId = $data['SP_ID'];
        $this->link = $data['HA_LINK'];
        $this->name = $data['HA_TEN'];
    }
}