<?php
class UserModel{
    public $id;
    public $email;
    public $fullname;
    public $password;
    public $birthday;
    public $role;

    function __construct($data){
        $this->id = $data['ND_ID'];
        $this->email = $data['ND_EMAIL']; 
        $this->fullname = $data['ND_HO_TEN'];
        $this->password = $data['ND_PASSWORD'];
        $this->birthday = $data['ND_NGAY_SINH'];
        $this->role = $data['ND_VAI_TRO'];

    }
    
}