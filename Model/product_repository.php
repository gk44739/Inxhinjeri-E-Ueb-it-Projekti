<?php
require('connection_db.php');
require('product.php');

function create_product(Product $product){
    global $connection;

    $checkproduct = mysqli_query($connection, "SELECT id FROM product WHERE title='".$product->getTitle()."'");  
    $result = mysqli_num_rows($checkproduct);  

    if ($result == 0) {
        $query = "INSERT INTO `product` (`title`, `price`, `description`, `photo_main`, `photo_1` , `photo_2` ,`photo_3` ,`user_ID`) VALUES ('".$product->getTitle()."', '".$product->getPrice()."', '".$product->getDescription()."' , '".$product->getPhoto_main()."', '".$product->getPhoto_1()."', '".$product->getPhoto_2()."','".$product->getPhoto_3()."','".$product->getUserID()."')";
        $create = mysqli_query($connection, $query) or die(mysqli_error($connection));  
        return $create;  
    } else {  
        return false;  
    }
}

function delete(Product $product){
    global $connection;

    $checkproduct = mysqli_query($connection, "SELECT id FROM product WHERE title='".$product->getTitle()."'");
    $result = mysqli_num_rows($checkproduct);

    if($result == 1){
        $query = "DELETE FROM product WHERE title='".$product->getTitle()."'";
        $delete = mysqli_query($connection,$query) or die(mysqli_error($connection)); 
        return $delete;
    }else{
        return false;
    }
}

function edit(Product $product){
    global $connection;

    $id = $product->getId();
    $title = $product->getTitle();
    $price = $product->getPrice();
    $photo_main = $product->getPhoto_main();
    $photo_1 = $product->getPhoto_1();
    $photo_2 = $product->getPhoto_2();
    $photo_3 = $product->getPhoto_3();
    $userID = $product->getUserID();
        
    $sql = "UPDATE product SET `price`='$price' , `photo_main`='$photo_main' , `photo_1`='$photo_1' ,`photo_2`='$photo_2' ,`photo_3`='$photo_3' , `user_ID`='$userID' WHERE id=$id";
    $toEdit = mysqli_query($connection,$sql);
}

?>