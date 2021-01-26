<?php


class auth
{
private $hostname = 'localhost';
private $db_username = 'Evgenii';
private $db_password = 'a1b32725368732a';
private $db_name = 'users';
private $user;
private $user_password;
public function __construct($user,$user_password){
    $this -> user = $user;
    $this -> user_password = $user_password;
}
public function connect(){
    return mysqli_connect($this->hostname, $this->db_username,$this->db_password,$this->db_name);
}

public function selectUser(){
    return mysqli_query($this->connect(), "SELECT * FROM users WHERE Login='" . $this->user . "'");
}

public function getUser(){
    return $this->user;
}

    public function getPass(){
        return $this->user_password;
    }


}

?>