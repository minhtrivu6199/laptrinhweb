<?php

include_once './dao/UserDAO.php';

class UserService{

    public static function login($username, $password) {
        return UserDAO::findByEmailAndPassword($username, $password);
    }

    public static function register($user){
        return UserDAO::save($user);
    }
}