<?php
require('connection_db.php');
require('user.php');

function register(User $user){
    global $connection;
    $checkuser = mysqli_query($connection, "Select id from user where username='".$user->getUsername()."'");  
    $checkuser1 = mysqli_query($connection, "Select id from user where email='".$user->getEmail()."'"); 
    $result = mysqli_num_rows($checkuser);  
    $result1 = mysqli_num_rows($checkuser1); 
    if ($result == 0 && $result1 == 0) {
        $password = md5($user->getPassword());
        $query = "INSERT INTO `user` (`username`,`email`,`password`,`roli`)VALUES ('".$user->getUsername()."','".$user->getEmail()."', '$password','".$user->getRoli()."')";
        $register = mysqli_query($connection, $query) or die(mysqli_error($connection));  
        return $register;  
    } else {  
        return false;  
    }
}

function login($username, $password){
    global $connection;
    session_start();
    $pass = md5($password);
    $check = mysqli_query($connection,"Select * from user where username='$username' and password='$pass'");  
    $data = mysqli_fetch_array($check);  
    $result = mysqli_num_rows($check);  
    if ($result == 1) {  
        $_SESSION['login'] = true;  
        $_SESSION['id'] = $data['id']; 
        $_SESSION['username']= $data['username'];
        $_SESSION['role']= $data['roli'];
        return true;  
    } else {  
        return false;
    } 
}

function isAdmin($username){
    global $connection;
    $check = mysqli_query($connection,"Select roli from user where username='$username'");  
    $data = mysqli_fetch_array($check);  
    return $data['roli'];
}

function session() {  
    if (isset($_SESSION['login'])) {  
        return $_SESSION['login'];  
    }  
}

function logout(){
    $_SESSION['login'] = false;  
    session_destroy(); 
}

function delete(User $user){
    global $connection;
    $checkuser = mysqli_query($connection, "Select id from users where username='".$user->getUsername()."'");
    $result = mysqli_num_rows($checkuser);
    if($result == 1){
        $query = "DELETE FROM user WHERE username='".$user->getUsername()."'";
        $delete = mysqli_query($connection,$query) or die(mysqli_error($connection)); 
        return $delete;
    }else{
        return false;
    }
}

function edit(User $editedUser){
    global $connection;
    if(session()){
        $pass = md5($editedUser->getPassword());
        $userId= $editedUser->getId();
        $query = "UPDATE `user` SET `username` = '".$editedUser->getUsername()."', `email` = '".$editedUser->getEmail()."', `password` = '$pass', `roli` = '".$editedUser->getRoli()."' WHERE `id` = '".$userId."'";
        $toEdit = mysqli_query($connection,$query) or die(mysqli_error($connection));
    }else{
        return false;
    }
}

?>