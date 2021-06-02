<?php

include_once dirname(__DIR__).'/dao/UserDAO.php';

class UserService{

    public static function login($username, $password) {
        return UserDAO::findByEmailAndPassword($username, $password);
    }

    public static function register($user){
        return UserDAO::save($user);
    }

    public  static function changePassword($id, $username, $password, $newpass){
        return UserDAO::changePassword($id, $username, $password, $newpass);
    }
}