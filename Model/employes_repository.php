<?php
require('connection_db.php');
require('employes.php');

function createEmploye(Employes $employe){
    global $connection;
    $check_employe = mysqli_query($connection, "SELECT id FROM employes WHERE name='".$employe->getName()."' AND surname='".$employe->getSurname()."'"); 
    $result = mysqli_num_rows($check_employe);  
    if ($result == 0) {
        $query = "INSERT INTO `employes` (`photo`,`name`, `surname`, `work_position`) VALUES ('".$employe->getPhoto()."', '".$employe->getName()."', '".$employe->getSurname()."', '".$employe->getWork_Position()."')";
        $create = mysqli_query($connection, $query) or die(mysqli_error($connection));  
        return $create;  
    } else {  
        return false;  
    }
}

function delete(Employes $employe){
    global $connection;
    $check_employe = mysqli_query($connection, "SELECT id FROM employes WHERE name='".$employe->getEmri()."'");
    $result = mysqli_num_rows($check_employe);
    if($result == 1){
        $query = "DELETE FROM employes WHERE name='".$employe->getName()."' AND surname='".$employe->getSurname()."'";
        $delete = mysqli_query($connection,$query) or die(mysqli_error($connection)); 
        return $delete;
    }else{
        return false;
    }
}

function edit(Employes $employe){
    global $connection;
    
    $photo = $employe->getPhoto();
    $name = $employe->getName();
    $surname = $employe->getSurname();
    $work_position = $employe->getWork_Position();
    $id = $employe->getId();
        
        
    $sql = "UPDATE `employes` SET  photo='$photo' ,`name` = '$name' , surname='$surname' , work_position='$work_position' WHERE id=$id";
    $toEdit = mysqli_query($connection,$sql);
}

?>