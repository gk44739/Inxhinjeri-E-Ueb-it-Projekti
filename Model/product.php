<?php
require('db_connection.php');

class Product{
    private $title;
    private $price;
    private $description;
    private $photo_main;
    private $photo_1;
    private $photo_2;
    private $photo_3;
    private $userID;

    public function __construct($title,$price,$photo_main,$photo_1,$photo_2,$photo_3,$userID){
        $this->title=$title;
        $this->price=$price;
        $this->photo_main=$photo_main;
        $this->photo_1=$photo_1;
        $this->photo_2=$photo_2;
        $this->photo_3=$photo_3;
        $this->userID=$userID;
    }

    public function getId(){
        global $connection;
        $result = mysqli_query($connection,"SELECT id FROM product WHERE title = '$this->title'");
        $row = mysqli_fetch_assoc($result);
        return $row['id'];
    }

    public function getTitle(){
        return $this->title;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getPhoto_main(){
        return $this->photo_main;
    }

    public function getPhoto_1(){
        return $this->photo_1;
    }

    public function getPhoto_2(){
        return $this->photo_2;
    }

    public function getPhoto_3(){
        return $this->photo_3;
    }

    public function getUserID(){
        return $this->userID;
    }

    public function setTitle($n){
        $this->title=$n;
    }

    public function setPrice($n){
        $this->price=$n;
    }

    public function setPhoto_main($n){
        $this->photo_main=$n;
    }

    public function setPhoto_1($n){
        $this->photo_1=$n;
    }

    public function setPhoto_2($n){
        $this->photo_2=$n;
    }

    public function setPhoto_3($n){
        $this->photo_3=$n;
    }

    public function setUserID($n){
        $this->userID = $n;
    }
    

    public function __toString(){
        return (string)($this->title.' , '.$this->price.' , '.$this->description.');
    }
}

?>