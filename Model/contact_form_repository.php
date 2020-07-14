<?php
require('connection_db.php');
require('contact_form.php');

function create(Contact_Form $contact_form){
    global $connection;
    $query = "INSERT INTO `contact_form` (`subject`,`email`,`file`,`content`,`sentdate`)VALUES('".$contact_form->getSubject()."','".$contact_form->getEmail()."', '".$contact_form->getFile()."','".$contact_form->getContent()."','".date("Y-m-d H:i:s")."')";
    $create = mysqli_query($connection, $query) or die(mysqli_error($connection));  
    return $create;  
}

function delete($subject){
    global $connection;
    $checknews = mysqli_query($connection, "SELECT id FROM users WHERE subject='$subject'");
    $result = mysqli_num_rows($checknews);
    if($result == 1){
        $query = "DELETE FROM `contact_form` WHERE subject='$subject'";
        $delete = mysqli_query($connection,$query) or die(mysqli_error($connection)); 
        return $delete;
    }else{
        return false;
    }
}
?>