<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- FAVICON -->
    <link rel="stylesheet" href="/css/default.css">
    <link rel="stylesheet" href="/css/dashboard_home.css">
    <link rel="stylesheet" href="/css/dashboard_users.css">
</head>
<body>
    <header>
        <!-- <a href="#"><img src="#"></a> -->
        <div class="logo__box">
            <a href="home.html" class="logo"><span>E</span> Shop.</a>
        </div>
        <nav>
            <ul>
                <li><a href="dashboard_home.php">Add Product</a></li>
                <li><a href="about.php">View Products</a></li>
                <li><a href="dashboard_users.php">Users</a></li>
                <li><a href="contact.php">Messages</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="users__form">
        <h1>Users</h1>
        <div class="users__form__inner">
            <div class="users__table">
                
            </div>
            <div class="user__form__inputs">
                <form action="">
                    
                    <input type="text" placeholder="Username">
                    <br>
                    <input type="email" placeholder="Email">
                    <br>
                    <input type="password" placeholder="Password">
                    <br>
                    <input type="submit" value="Save">
                </form>
            </div>
        </div>
    </div>
</body>
</html>