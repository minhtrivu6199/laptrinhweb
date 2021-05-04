<?php

include_once 'dbconnect.php';

include_once './models/UserModel.php';



class UserDAO{

    private  static function queryAll($sql){
        global $conn;
    
        $result = $conn->query($sql);
    
        $listProduct = array();
    
        while ($row = $conn->fetch_assoc()){
            array_push($listProduct, new UserModel($row));
        }
    
        return $listProduct;
    }
    
    private static function queryTop($sql){
        global $conn;
    
        $result = $conn->query($sql);
    
        if($result->num_rows > 0){
            //thanh cong
            $row = $result->fetch_assoc();
            return new UserModel($row);
        }else{
            // that bai
            return null;
        }
    }

    public static function findById($id){
        $sql = "SELECT * FROM NGUOI_DUNG where ND_Id = $id";
        return UserDAO::queryTop($sql);
    }

    public  static function findAll(){
        $sql = "SELECT * FROM NGUOI_DUNG";
        return UserDAO::queryAll($sql);
    }

    public  static function findAllLimit($limit, $offset){
        $sql = "SELECT * FROM NGUOI_DUNG limit $offset, $limit";
        return UserDAO::queryAll($sql);
    }

    public  static function findAllByIds($listId){
        $result = array();
        foreach (listId as $id){
            $user = UserDAO::findById($id);

            if($user != NULL){
                array_push($result, $user);
            }
        }
        return result;
    }

    // public  static function sortByUser(){
    //     $sql = "SELECT ND_Ho_Ten FROM NGUOI_DUNG ORDER BY ND_Ho_Ten ASC/DESC";
    //     return UserDAO::queryAll($sql);
    // }

    // public static function findByName($name){
    //     $sql = "SELECT * FROM NGUOI_DUNG where ND_Ho_Ten LIKE '%$name%'";
    //     return UserDAO::queryAll($sql);
    // }
    
    
    // public  static function delUser($id){
    //     $sql = "DELETE FROM NGUOI_DUNG where ND_Id = '$id'";
    
    //     return UserDAO::queryAll($sql);
    // }

    public static function findByEmailAndPassword($email, $password){
        $sql = "SELECT * FROM NGUOI_DUNG where ND_EMAIL = '$email' AND ND_PASSWORD = '$password'";
        return UserDAO::queryTop($sql);
    }

    public static function save($user){
        global $conn;
        if ($user->id ==  null){
            $sql = "INSERT INTO NGUOI_DUNG(ND_EMAIL, ND_HO_TEN, ND_NGAY_SINH, ND_PASSWORD, ND_VAI_TRO) VALUES ('$user->email', '$user->fullname', '$user->birthday', '$user->password', 'user')";

            $result = $conn->query($sql);
            
            return $result;
        }
        return FALSE;
    }
}