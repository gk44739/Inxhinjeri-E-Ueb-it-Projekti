<?php
require('connection_db.php');

class Employes{
    private $photo;
    private $name;
    private $surname;
    private $work_position;
    

    public function __construct($photo,$name,$surname,$work_position){
        $this->photo=$photo;
        $this->name=$name;
        $this->surname=$surname;
        $this->work_position=$work_position;
    }

    public function getId(){
        global $connection;
        $result = mysqli_query($connection,"SELECT id FROM employes WHERE name = '$this->name' AND surname='$this->surname'");
        $row = mysqli_fetch_assoc($result);
        return $row['id'];
    }

    public function getName(){
        return $this->name;
    }

    public function getSurname(){
        return $this->surname;
    }

    public function getWork_Position(){
        return $this->work_position;
    }

    public function getPhoto(){
        return $this->photo;
    }


    public function setName($n){
        $this->name=$n;
    }

    public function setSurname($n){
        $this->surname=$n;
    }

    public function setWork_Position($n){
        $this->work_position=$n;
    }

    public function setPhoto($n){
        $this->photo=$n;
    }

    public function __toString(){
        return (string)($this->name.' , '.$this->surname.' , '.$this->work_position.' , '.$this->photo);
    }
}

?>