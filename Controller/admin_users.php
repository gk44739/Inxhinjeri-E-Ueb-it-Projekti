<?php
    require('../Model/connection_db.php');
    require('../Model/user_repository.php');

    if(isset($_POST['create__user'])){
        session_start();
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $role=$_POST['role'];
        $user_ID = $_SESSION['id'];

        $user = new User($username,$email,$password,$role);
        if(register($user)){
        ?>
        <script>
            window.location.href="../View/dashboard_users.php";
        </script>
        <?php
        }else {
            ?>
            <script>
                window.location.href="../View/dashboard_users.php";
                alert("This user has already been registered");
            </script>
            <?php
        }
    }

    $username = "";
    $email = "";
    $roli="";
    $id = "";
    $update = false;
    

    if(isset($_GET['delete'])){
        global $connection;

        $id = $_GET['delete'];
        $sql = "DELETE FROM `user` WHERE id=$id";
        $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));

        header("location: ../View/dashboard_users.php");
    }


    if(isset($_GET['edit'])){
        global $connection;
        $id = $_GET['edit'];

        $sql = "SELECT * FROM `user` WHERE id = $id";
        $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));
        $row = $result->fetch_array();
        $username = $row['username'];
        $email = $row['email'];
        $roli = $row['roli'];
        $update = true;
    }

    if(isset($_POST['cancel'])){
        header("location: ../View/dashboard_users.php");
    }

    if(isset($_POST['update'])){
        session_start();
        $username_update = $_POST['username'];
        $email_update = $_POST['email'];
        $password_update = $_POST['password'];
        $roli_update=$_POST['role'];

        $user = new User($username_update,$email_update,$password_update,$roli_update);
        edit($user);
        header("location: ../View/dashboard_users.php");
    }

?>