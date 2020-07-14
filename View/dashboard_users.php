<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users</title>
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
    <link rel="stylesheet" href="css/dashboard_users.css">
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
                <li><a href="contact.php">Messages</a></li>
            </ul>
        </nav>
    </header>
 
    <div class="users__form">
        <h1>Users</h1>
        <div class="users__form__inner">
        
        
            <div class="users__table">
            <?php
                require_once "../Controller/admin_product.php";
                require "../Model/connection_db.php";
            ?>
            <table>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>   
                <?php
                    
                    global $connection;

                    $sql = "SELECT * FROM user";
                    $result = $connection->query($sql);

                    if ($result->num_rows > 0){
                        while($row = $result-> fetch_assoc()){
                            echo "<tr><td>".$row["username"]."</td>
                                    <td>".$row["email"]."</td>
                                    <td>".$row["roli"]."</td>";
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
            
            <div class="user__form__inputs">
                <form action="">
                    
                    <input type="text" placeholder="Username">
                    <br>
                    <input type="email" placeholder="Email">
                    <br>
                    <input type="password" placeholder="Password">
                    <br>
                    <select name="role" >
                        <option value="0">Administrator</option>
                        <option value="1">User</option>
                    </select>
                    <input type="submit" value="Save">
                </form>
            </div>

            
        </div>
    </div>
</body>
</html>