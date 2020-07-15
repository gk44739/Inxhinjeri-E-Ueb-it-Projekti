<?php
    session_start();
    $roli = $_SESSION['role'];
    if($_SESSION['role']!=0){
        header("location: home.php");
    }
    if(isset($_SESSION['login'])!=true){
        header("location: dashboard_home.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Employee</title>
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
    <link rel="stylesheet" href="css/dashboard_employe.css">
</head>
<body>
    <header>
        <!-- <a href="#"><img src="#"></a> -->
        <div class="logo__box">
            <a href="dashboard_home.php" class="logo"><span>E</span> Shop.</a>
        </div>
        <?php
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
        require "../Controller/admin_employe.php";
        require "../Model/connection_db.php";
    ?>
    <div class="upload_form">
        
        <div class="add__employe">
            <h1>Add/Edit Employee</h1>
            
            <form action="../Controller/admin_employe.php" method="POST" enctype="multipart/form-data" onsubmit="return employeValidation()">
                <div class="employe__photo">
                    <?php
                    if($update){
                        ?>
                        <img id="preview-image" accept="image/jpg,image/png" src="img/employes/<?php echo $photo; ?>" alt="">
                        <?php
                    }else{
                        ?>
                        <img id="preview-image" accept="image/jpg,image/png" src="img/placeholder_employe.jpg" alt="">
                        <?php
                    }
                    ?>
                    
                </div>
                <div class="file__chooser">
                    <label for="photo">Photo</label>
                    <input type="file" id="photo" class="img_validate" name="photo">
                </div>
                
                <input type="hidden" value="<?php echo $id; ?>" name="id">
                <input type="text" placeholder="Name" value="<?php echo $name; ?>" name="name" id="employeName">
                <input type="text" placeholder="Surname" value="<?php echo $surname; ?>" name="surname" id="employeSurname">
                <input type="text" placeholder="Work Position" value="<?php echo $work_position; ?>" name="work_position" id="employePosition">
                <div class="submit_employee">
                    <?php
                        if($update){
                            ?>
                                <input name="update" type="submit" value="Edit">
                            <?php
                        } else {
                            ?>
                                <input name="create_employe" type="submit" value="Upload">
                            <?php
                        }
                    ?>
                    <input name="cancel" type="submit" value="Cancel">
                </div>
            </form>
            
        </div>

        <div class="employe_table">
            <table>
                <tr>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Work Position</th>
                    <th>Action</th>
                    
                </tr>   
                <?php
                    
                    global $connection;

                    $sql = "SELECT * FROM employes";
                    $result = $connection->query($sql);

                    if ($result->num_rows > 0){
                        while($row = $result-> fetch_assoc()){
                            echo "<tr><td>".$row["photo"]."</td>
                                    <td>".$row["name"]."</td>
                                    <td>".$row["surname"]."</td>
                                    <td>".$row["work_position"]."</td>";
                            ?>
                            
                            <td>
                                <a href="dashboard_employe.php?edit=<?php echo $row['id']; ?>"><button>Edit</button></a>
                                <a href="../Controller/admin_employe.php?delete=<?php echo $row['id']; ?>"><button>Delete</button></a>
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
    <script src="js/main.js"></script>
</body>
</html>