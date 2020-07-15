<?php
    require('../Model/connection_db.php');
    require('../Model/product_repository.php');

    if(isset($_POST['create__product'])){
        session_start();
        $title = $_POST['title'];
        $price = $_POST['price'];


        $photo_main = $_FILES['main_photo']['name'];
        $photo_main_target = "../View/img/".basename($photo_main);
        move_uploaded_file($_FILES['main_photo']['tmp_name'], $photo_main_target);
           
        

        $photo_1 = $_FILES['photo_1']['name'];
        $photo_1_target = "../View/img/".basename($photo_1);
        move_uploaded_file($_FILES['photo_1']['tmp_name'], $photo_1_target);
        

        $photo_2 = $_FILES['photo_2']['name'];
        $photo_2_target = "../View/img/".basename($photo_2);
        move_uploaded_file($_FILES['photo_2']['tmp_name'], $photo_2_target);
        

        $photo_3 = $_FILES['photo_3']['name'];
        $photo_3_target = "../View/img/".basename($photo_3);
        move_uploaded_file($_FILES['photo_3']['tmp_name'], $photo_3_target);
        

        $description=$_POST['description'];
        $user_ID = $_SESSION['id'];

        $product = new Product($title,$price,$description,$photo_main,$photo_1,$photo_2,$photo_3,$user_ID);
        if(create_product($product)){
        ?>
        <script>
            window.location.href="../View/dashboard_home.php";
        </script>
        <?php
        }else {
            ?>
            <script>
                window.location.href="../View/dashboard_home.php";
                alert("This product has already been registered");
            </script>
            <?php
        }
    }

    $name = "";
    $price = "";
    $photo_main="";
    $photo_1="";
    $photo_2="";
    $photo_3="";
    $description = "";
    $id = "";
    $update = false;
    

    if(isset($_GET['delete'])){
        global $connection;

        $id = $_GET['delete'];
        $sql = "DELETE FROM `product` WHERE id=$id";
        $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));

        header("location: ../View/dashboard_home.php");
    }

    if(isset($_GET['edit'])){
        global $connection;
        $id = $_GET['edit'];

        $sql = "SELECT * FROM `product` WHERE id = $id";
        $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));
        $row = $result->fetch_array();
        $name = $row['title'];
        $price = $row['price'];
        $description = $row['description'];
        $update = true;
    }

    if(isset($_POST['cancel'])){
        header("location: ../View/dashboard_home.php");
    }

    if(isset($_POST['update'])){
        session_start();
        $id = $_POST['id'];
        $title = $_POST['title'];
        $price = $_POST['price'];
        
        global $connection;
        $sql = "SELECT * FROM `product` WHERE id=$id";
        $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));
        $row = $result->fetch_array();
        
        if(isset($_FILES['main_photo'])){
            if($_FILES['main_photo']['size']!=0){
                $old_img=$row['photo_main'];
                unlink("../View/img/$old_img");
                $photo_main = $_FILES['main_photo']['name'];
                $photo_main_target = "../View/img/".basename($photo_main);
                move_uploaded_file($_FILES['main_photo']['tmp_name'], $photo_main_target);
            }else{
                $photo_main=$row['photo_main'];
            }
        }

        if(isset($_FILES['photo_1'])){
            if($_FILES['photo_1']['size']!=0){
                $old_img=$row['photo_1'];
                unlink("../View/img/$old_img");
                $photo_1 = $_FILES['photo_1']['name'];
                $photo_main_target = "../View/img/".basename($photo_main);
                move_uploaded_file($_FILES['photo_1']['tmp_name'], $photo_main_target);
            }else{
                $photo_1=$row['photo_1'];
            }
        }

        if(isset($_FILES['photo_2'])){
            if($_FILES['photo_2']['size']!=0){
                $old_img=$row['photo_2'];
                unlink("../View/img/$old_img");
                $photo_2 = $_FILES['photo_2']['name'];
                $photo_main_target = "../View/img/".basename($photo_main);
                move_uploaded_file($_FILES['photo_2']['tmp_name'], $photo_main_target);
            }else{
                $photo_2=$row['photo_2'];
            }
        }

        if(isset($_FILES['photo_3'])){
            if($_FILES['photo_3']['size']!=0){
                $old_img=$row['photo_3'];
                unlink("../View/img/$old_img");
                $photo_3 = $_FILES['photo_3']['name'];
                $photo_main_target = "../View/img/".basename($photo_main);
                move_uploaded_file($_FILES['photo_3']['tmp_name'], $photo_main_target);
            }else{
                $photo_3=$row['photo_3'];
            }
        }

        $description=$_POST['description'];
        $user_ID = $_SESSION['id'];

        $product = new Product($title,$price,$description,$photo_main,$photo_1,$photo_2,$photo_3,$user_ID);
        edit($product);
        header("location: ../View/dashboard_home.php");
    }

?>