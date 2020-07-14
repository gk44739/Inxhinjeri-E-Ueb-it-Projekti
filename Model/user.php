<?php
require("connection_db.php");

class User{
    private $username;
    private $email;
    private $password;
    private $roli;

    public function __construct($username,$email,$password,$roli){
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->roli = $roli; 
    }

    public function getId(){
        global $connection;
        $result = mysqli_query($connection,"SELECT id FROM user WHERE username = '$this->username'"); 
        $row = mysqli_fetch_assoc($result);
        return $row['id'];
    }

    public function getUsername(){
        return $this->username;
    }

    public function setUsername($usename){
        $this->username = $username;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function getRoli(){
        return $this->roli;
    }

    public function setRoli($roli){
        $this->roli = $roli;
    }

    public function __toString(){
        return (string) ($this->username." ".$this->email." ".$this->password);
    }
}
?>