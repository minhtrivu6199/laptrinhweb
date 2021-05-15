<?php

include_once dirname(__DIR__).'/dao/ImageDAO.php';

class ImageService {
    
    public static function findById($id){
        return ImageDAO::findById($id);
    }
}