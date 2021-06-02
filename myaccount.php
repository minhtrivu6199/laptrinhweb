<?php
include_once './models/UserModel.php';
include_once './services/UserService.php';

session_start();

if (isset($_POST['action']) && $_POST['action'] == 'changepassword'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $newpass  = $_POST['newpass1'];
    $user = UserService::changePassword($_SESSION['user']->id, $username, $password, $newpass);
    if  ($user != null){
        $_SESSION['user'] = $user;
        header('Location: /index.php');
        die;
    }else{
        echo "thất bại";
    }
}

include './views/changePassword.php';