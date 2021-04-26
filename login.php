<?php

session_start();

include_once './models/UserModel.php';
include_once './services/UserService.php';

if (isset($_POST['action']) && $_POST['action'] == 'login'){
    $username = $_POST['email'];
    $password = $_POST['password'];
    $user = UserService::login($username, $password);
    if  ($user != null){
        $_SESSION['user'] = $user;
        header('Location: /index.php');
        die;
    }else{
        $error_message= "Đăng nhập thất bại";
    }
}

if (isset($_POST['action']) && $_POST['action'] == 'register'){
    $user = new UserModel();
    $user->email = $_POST['email'];
    $user->password = $_POST['password'];
    $user->fullname = $_POST['fullname'];
    $user->birthday = $_POST['birthday'];

    if  (UserService::register($user)){
        header('Location: /login.php');
        die;
    }else{
        $error_message= "Đăng ký thất bại";
    }
}

include_once './views/login.php';