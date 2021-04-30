<?php

if (session_id() == '') {
    session_start();
}

if(isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
}else{
    header('Location: /login.php');
}