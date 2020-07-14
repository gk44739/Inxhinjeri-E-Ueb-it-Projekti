<?php
    require('../Model/connection_db.php');

    if(isset($_GET['delete'])){
        global $connection;

        $id = $_GET['delete'];
        $sql = "DELETE FROM `contact_form` WHERE id=$id";
        $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));
        
        if($result){
            $_SESSION['message'] = "User Deleted Succesfully";
        } else {
            $_SESSION['message'] = "User didn't Deleted Succesfully";
        }
        header("location: ../View/dashboard_messages.php");
        exit();
    }

    $message = "";

    if(isset($_GET['message'])){
        global $connection;

        $id = $_GET['message'];
        $sql = "SELECT * FROM `contact_form` WHERE id=$id";
        $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));
        $row = $result->fetch_array();
        $message = $row['message'];
    }
?>