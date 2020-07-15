<?php
    require('../Model/connection_db.php');
    require('../Model/employes_repository.php');

    $photo = "";
    $name = "";
    $surname = "";
    $work_position = "";
    
    $update = false;

    if(isset($_POST['create_employe'])){

        $photo = $_FILES['photo']['name'];
        $photo_target = "../View/img/employes/".basename($photo);
        move_uploaded_file($_FILES['photo']['tmp_name'], $photo_target);

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $work_position = $_POST['work_position'];
        

        $employe = new Employes($photo,$name,$surname,$work_position);
        if(createEmploye($employe)){
        ?>
        <script>
            window.location.href="../View/dashboard_employe.php";
        </script>
        <?php
        }else {
            ?>
            <script>
                window.location.href="../View/dashboard_employe.php";
                alert("This employe has already been registered !");
            </script>
            <?php
        }
    } 

    if(isset($_GET['delete'])){
        global $connection;
        $id = $_GET['delete'];
        $sql = "SELECT * FROM `employes` WHERE id=$id";
        $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));
        $row = $result->fetch_array();

        $old_img=$row['photo'];
        unlink("../View/img/employes/$old_img");

        $sql = "DELETE FROM `employes` WHERE id=$id";
        $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));
        
        if($result){
            $_SESSION['message'] = "Employe Deleted Succesfully";
        } else {
            $_SESSION['message'] = "Employe didn't Deleted Succesfully";
        }
        header("location: ../View/dashboard_employe.php");
        exit();
    }

    

    if(isset($_GET['edit'])){
        global $connection;

        $id = $_GET['edit'];
        $sql = "SELECT * FROM `employes` WHERE id=$id";
        $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));
        $row = $result->fetch_array();

        $photo = $row['photo'];
        $name = $row['name'];
        $surname = $row['surname'];
        $work_position = $row['work_position'];

        $update = true;
    }

    if(isset($_POST['cancel'])){
        header("location: ../View/dashboard_employes.php");
    }

    

    if(isset($_POST['update'])){
        global $connection;
        $id = $_POST['id'];

        $sql = "SELECT photo FROM `employes` WHERE id=$id";
        $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));
        $row = $result->fetch_array();

        if(isset($_FILES['photo'])){
            if($_FILES['photo']['size']!=0){
                $old_img=$row['photo'];
                unlink("../View/img/employes/$old_img");
                $photo = $_FILES['photo']['name'];
                $photo_target = "../View/img/employes/".basename($photo);
                move_uploaded_file($_FILES['photo']['tmp_name'], $photo_target);
            }else{
                $photo=$row['photo'];
            }
        }
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $work_position = $_POST['work_position'];
        
        $employe = new Employes($photo,$name,$surname,$work_position);
        edit($employe);
        header("location: ../View/dashboard_employe.php");
        // $sql = "UPDATE `about` SET `mbiemri` = '$mbiemri' , `profesioni` = '$profesioni' , `foto` = '$foto'  WHERE id = $idd";
        // $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));
        // if($result){
        //     // Mesazhi me Sukses
            // header("location: ../View/aboutAdmin.php");
        // }else {
        //     // Mesazhi pa sukses
        //     header("location: ../View/aboutAdmin.php");
        // }
    }

?>