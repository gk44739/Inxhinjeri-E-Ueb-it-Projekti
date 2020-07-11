<?php
    require('../Model/user_repository.php');
    session_start();
    logout();
    header('location:../View/home.php');
?>