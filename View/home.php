<!DOCTYPE html>
    <title>E Shop</title>
    <head>
        <!-- FAVICON -->
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <link rel="manifest" href="favicon/site.webmanifest">
        <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <!-- FAVICON -->
        <link rel="stylesheet" href="css/fontawesome.css">
        <link rel="stylesheet" href="css/default.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/home.css">
        
    </head>
    <body> 
        <header>
            <div class="header__top">
                <div class="container">
                    <div class="header__top__inner">
                        <?php
                            session_start();
                            if(isset($_SESSION['login'])){
                                $username=$_SESSION['username'];
                                ?>
                                <p>Welcome <?php echo $username;?></p>
                                <p><a href="../Controller/user_logout.php">Log Out</a></p> 
                                <?php
                            }else{
                                ?>
                                   <p>Welcome to Our Store !</p>
                                   <p><a href="index.php">Sign Up / Sign In</a></p>
                                <?php
                            }
                        ?>                     
                    </div>
                </div>
            </div>
            
            <div class="header__main">
                <div class="container">
                    <div class="header__main__inner">
                        <!-- <a href="#"><img src="#"></a> -->
                        <a href="home.php" class="logo"><span>E</span> Shop.</a>
                        <div class="search">
                            <input type="text" name="search" id="searchProduct" placeholder="Search...">
                            <button type="submit" onclick="search()" id="searchButton"><i class="fas fa-search"></i></button> 
                        </div>
                        <!-- <div class="cart">
                            <a href="#">
                                <span>1</span>
                                <i class="fas fa-shopping-bag"></i>
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>

            <div id="header__nav" class="header__bar">
                <div class="container">
                    <div class="header__bar__inner">
                        <ul>
                            <?php
                                if(isset($_SESSION['login'])){
                                    $role=$_SESSION['role'];
                                    if($role==0){
                                        ?>
                                        <li><a href="dashboard_home.php">Dashboard</a></li>
                                        <?php
                                    }
                                }
                            ?>
                            <li><a href="home.php">Home</a></li>
                            <li><a href="shop.php">Shop</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <main>
        <div class="home__slider">
            <div class="container">
                <div class="home__slider__inner">
                
                    <?php
                        require('../Model/connection_db.php');
                        global $connection;
                        $query="SELECT * FROM `product`  ORDER BY `id` desc limit 4" ;
                        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
                        while($row=$result->fetch_array()){
                            ?>
                            <div class="home__slider__content">

                                <div class="home__slider__text">
                                    <h1><?php echo $row['title']; ?></h1>
                                    <p><?php echo $row['description']; ?></p>
                                    <a href="product.php?product=<?php echo $row['id']; ?>"><button>View details</button></a>
                                </div>
                                <div class="home__slider__image">
                                    <img src="img/<?php echo $row['photo_main']; ?>">
                                </div>
                                    
                            </div>
                            <?php
                        }
                    ?>

                    <div id="prev__button"><i class="fas fa-arrow-left"></i></div>
                    <div id="next__button"><i class="fas fa-arrow-right"></i></div>
                </div>
            </div>
        </div>

        <div class="home__info__boxes">
            <div class="container">
                <div class="home__info__boxes__inner">

                    <div class="home__info__box">
                        <div class="home__info__retangle"><i class="fas fa-rocket"></i></div>
                        <h2>Free Shipping</h2>
                        <p>Free on orders over $69.00</p>
                    </div>

                    <div class="home__info__box">
                        <div class="home__info__retangle"><i class="far fa-check-circle"></i></div>
                        <h2>Free Returns</h2>
                        <p>21 days free return policy</p>
                    </div>
                    
                    <div class="home__info__box">
                        <div class="home__info__retangle"><i class="fas fa-wallet"></i></div>
                        <h2>Secured Payments</h2>
                        <p>We accept all credit cards</p>
                    </div>

                    <div class="home__info__box">
                        <div class="home__info__retangle"><i class="far fa-comment-alt"></i><i class="far fa-comment-alt"></i></div>
                        <h2>Support 24/7</h2>
                        <p>Top notch consumer service</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="home__featured__products">
            <div class="container">
                <div class="home__featured__products__inner">

                    <?php
                        require('../Model/connection_db.php');
                        global $connection;
                        $query="SELECT * FROM `product`  ORDER BY `id` desc limit 2" ;
                        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
                        while($row=$result->fetch_array()){
                            ?>
                            <div class="home__featured__product">
                                <img src="img/<?php echo $row['photo_1']; ?>">
                                <div class="home__featured__product__overlay">
                                <div class="home__featured__product__text">
                                        <h2>Only <?php echo $row['price']; ?> </h2>
                                        <h1><?php echo $row['title']; ?></h1>
                                        
                                        <a href="product.php?product=<?php echo $row['id']; ?>"><button>Buy it now <i class="fas fa-chevron-right"></i></button></a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    ?>
                    
                </div>
            </div>
        </div>

        <div id="to__products" class="home__products">
            <div class="container">
                <div class="home__products__inner">
                    <h1>Products</h1>
                    <div class="home__products__row">
                        
                            <?php
                                require('../Model/connection_db.php');
                                global $connection;
                                $query="SELECT * FROM `product` limit 8";
                                $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
                                while($row=$result->fetch_array()){
                                    ?>
                                    <div class="home__product">
                                        <a href="product.php?product=<?php echo $row['id']; ?>">
                                            <img src="img/<?php echo $row['photo_main']; ?>">
                                            <div class="home__product__description">
                                                <p><?php echo $row['title']; ?></p>
                                                <span class="new__price"><?php echo $row['price']; ?></span>
                                            </div>
                                            <div class="home__product__action">
                                                <a href="product.php?product=<?php echo $row['id']; ?>"><button>Buy Now!</button></a>
                                            </div>
                                        </a>
                                    </div>
                                    <?php
                                }
                            ?>
                       
                    </div>
                    <a href="shop.php"><button>See All</button></a>
                </div>
            </div>
        </div>

        <div class="home__banner">
            <div class="container">
                <div class="home__banner__inner">
                    <h1>No Waiting, Order right now!</h1>
                    <p>And get 10% off of your first puchase</p>
                    <button id="to__products__arrow">Shopping Now</button>
                </div>
            </div>
        </div>

    </main>

        <footer>
            <div id="back__to__top"><i class="fas fa-sort-up"></i></div>
            <div class="container">
                <div class="footer__inner">
                        <div class="footer__links">
                            <div class="footer__links__information">
                                <h1>Information</h1>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed asperiores doloremque deleniti dignissimos aut? Repudiandae totam ipsam nesciunt esse sapiente voluptas aperiam unde maxime, nobis dignissimos debitis omnis reiciendis voluptates.</p>
                            </div>
                            <div class="footer__links__quick">
                                <h1>Quick Links</h1>
                                <ul>
                                    <li><a href="home.html">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="https://github.com/gk44739/Inxhinjeri-E-Ueb-it-Projekti.git">Git Repository</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer__subscribe">
                            <h1>Stay up-to-date on the lastest news and events</h1>
                            <form>
                                <input type="email" name="" placeholder="Your email adress">
                                <input type="submit" value="SUBSCRIBE">
                            </form>
                            <div class="footer__subscribe__social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                </div>
            </div>
            <div class="footer__copyright">
                <p>&copy; 2020 <span><a href="home.html">E Shop.</a></span> All rights reserved</p>
            </div>
        </footer>
        <script src="js/main.js"></script>
    </body>
</html>