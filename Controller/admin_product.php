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

    if(isset($_POST['update'])){
        $title = $_POST['title'];
        $price = $_POST['price'];
        $description=$_POST['description'];
        $user_ID = $_SESSION['id'];

        $id = $_POST['id'];
        global $connection;
        $sql = "SELECT * FROM `product` WHERE id=$id";
        $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));
        $row = $result->fetch_array();
        $product = new Product($title,$price,$description,$row['photo_main'],$row['photo_1'],$row['photo_2'],$row['photo_3'],$user_ID);
        edit($product);
        header("location: ../View/dashboard_home.php");
    }

?>