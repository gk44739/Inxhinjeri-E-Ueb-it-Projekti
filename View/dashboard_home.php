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
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/dashboard_home.css">
</head>
<body>
    <header>
        <!-- <a href="#"><img src="#"></a> -->
        <div class="logo__box">
            <a href="home.php" class="logo"><span>E</span> Shop.</a>
        </div>
        <nav>
            <ul>
                <li><a href="dashboard_home.php">Add Product</a></li>
                <li><a href="about.html">View Products</a></li>
                <li><a href="dashboard_users.php">Users</a></li>
                <li><a href="contact.html">Messages</a></li>
            </ul>
        </nav>
    </header>

    <div class="upload_form">
        <h1>Add Product</h1>
        <form action="">
            <input type="text" placeholder="Name">
            <br>
            <input type="text" placeholder="Price">

            <div class="photos__row">
                <div class="file__chooser">
                    <label for="main__photo">Main Photo</label>
                    <input type="file" id="main__photo">
                </div>

                <div class="file__chooser">
                    <label for="photo__1">Photo 1</label>
                    <input type="file" id="photo__1">
                </div>
            </div>

            <div class="photos__row">
                <div class="file__chooser">
                    <label for="photo__2">Photo 2</label>
                    <input type="file" id="photo__2">
                </div>

                <div class="file__chooser">
                    <label for="photo__3">Photo 3</label>
                    <input type="file" id="photo__3">
                </div>
            </div>
            <textarea name="" placeholder="Description"></textarea>
            <input type="submit" value="Publish">
        </form>
    </div>
</body>
</html>