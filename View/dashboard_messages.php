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
    <link rel="stylesheet" href="css/dashboard_message.css">
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
 
    <div class="message__form">
        <h1>Users</h1>
        <div class="message__form__inner">
        
        
            <div class="message__table">
            <?php
                require_once "../Controller/admin_users.php";
                require "../Model/connection_db.php";
            ?>
            <table>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Date / Time</th>
                    <th>Action</>
                </tr>   
                <?php
                    
                    global $connection;

                    $sql = "SELECT * FROM contact_form";
                    $result = $connection->query($sql);

                    if ($result->num_rows > 0){
                        while($row = $result-> fetch_assoc()){
                            echo "<tr><td>".$row["subject"]."</td>
                                    <td>".$row["email"]."</td>
                                    <td>".$row["attachment"]."</td>
                                    <td>".$row["date/time"]."</td>";
                            ?>
                            
                            <td>
                                <a href="dashboard_users.php?edit=<?php echo $row['id']; ?>"><button>Edit</button></a>
                                <a href="../Controller/admin_users.php?delete=<?php echo $row['id']; ?>"><button>Delete</button></a>
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
            
            <div class="message__form__inputs">
                <form action="../Controller/admin_users.php" method="POST" onsubmit="return usersValidation()">
                    <textarea placeholder="Click User Message On Table" name="message"><?php echo $row['message']?></textarea>
                </form>
            </div>

            
        </div>
    </div>
    <script src="js/admin-validation.js"></script>
</body>
</html> 