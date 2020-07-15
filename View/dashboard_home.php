<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Home</title>
    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- FAVICON -->
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/dashboard_home.css">
</head>
<body>
    <header>
        <!-- <a href="#"><img src="#"></a> -->
        <div class="logo__box">
            <a href="dashboard_home.php" class="logo"><span>E</span> Shop.</a>
        </div>
        <?php
            session_start();
            if(isset($_SESSION['login'])){
                $username=$_SESSION['username'];
                ?>
                <div class="wellcome__logout">
                    <p>Welcome <?php echo $username; ?></p>
                    <p><a href="../Controller/user_logout.php"><button>Log Out</button></a></p>
                </div> 
                <?php
            }
        ?> 
        <nav>
            <ul>
                <li><a href="home.php">Website</a></li>
                <li><a href="dashboard_home.php">Products</a></li>
                <li><a href="dashboard_users.php">Users</a></li>
                <li><a href="dashboard_messages.php">Messages</a></li>
                <li><a href="dashboard_employe.php">Employes</a></li>
            </ul>
        </nav>
    </header>
    <?php
        require_once "../Controller/admin_product.php";
        require "../Model/connection_db.php";
    ?>
    <div class="upload_form">
        
        <div class="add__product">
            <h1>Add Product</h1>
            <form action="../Controller/admin_product.php" method="POST" enctype="multipart/form-data" onsubmit="return productValidation()">
                <input type="text" placeholder="Name" value="<?php echo $name; ?>" name="title" id="productName">
                <input type="hidden" value="<?php echo $id; ?>" name="id">
                <br>
                <input type="text" placeholder="Price" value="<?php echo $price; ?>" name="price" id="productPrice">

                <div class="photos__row">
                    <div class="file__chooser">
                        <label for="main__photo">Main Photo</label>
                        <input type="file" id="main__photo"  name="main_photo">
                    </div>

                    <div class="file__chooser">
                        <label for="photo__1">Featured Photo</label>
                        <input type="file" id="photo__1" name="photo_1">
                    </div>
                </div>

                <div class="photos__row">
                    <div class="file__chooser">
                        <label for="photo__2">Photo 2</label>
                        <input type="file" id="photo__2"  name="photo_2">
                    </div>

                    <div class="file__chooser">
                        <label for="photo__3">Photo 3</label>
                        <input type="file" id="photo__3"  name="photo_3">
                    </div>
                </div>
                <textarea name="description" placeholder="Description" id="productDescription"><?php echo $description; ?></textarea>
                <?php
                    if($update){
                        ?>
                            <input name="update" type="submit" value="Update">
                        <?php
                    } else {
                        ?>
                            <input name="create__product" type="submit" value="Publish">
                        <?php
                    }
                ?>
                
            </form>
        </div>

        <div class="product_table">
            <?php
                require_once "../Controller/admin_product.php";
                require "../Model/connection_db.php";
            ?>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Photos</th>
                    <th>Action</th>
                    
                </tr>   
                <?php
                    
                    global $connection;

                    $sql = "SELECT * FROM product";
                    $result = $connection->query($sql);

                    if ($result->num_rows > 0){
                        while($row = $result-> fetch_assoc()){
                            echo "<tr><td>".$row["title"]."</td>
                                    <td>".$row["price"]."</td>
                                    <td width='300px'>".$row["description"]."</td>
                                    <td><p><span>Main Photo :</span> ".$row["photo_main"]."</p>
                                    <p><span>Featured Photo :</span> ".$row["photo_1"] ."</p>
                                    <p><span>Photo 3 :</span> ".$row["photo_2"] ."</p>
                                    <p><span>Photo 4 :</span> ".$row["photo_3"] ."</p>
                                    </td>";
                            ?>
                            
                            <td>
                                <a href="dashboard_home.php?edit=<?php echo $row['id']; ?>"><button>Edit</button></a>
                                <a href="../Controller/admin_product.php?delete=<?php echo $row['id']; ?>"><button>Delete</button></a>
                            </tr>
                            <?php
                        }
                            echo "</table>";
                    }else{
                        echo "0 result";
                    }
                    $connection->close();

                ?>
            </table>
        </div>
        
    </div>
    <script src="js/admin-validation.js"></script>
</body>
</html>