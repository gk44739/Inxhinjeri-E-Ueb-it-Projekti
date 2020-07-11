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
        <link rel="stylesheet" href="css/shop.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/fontawesome.css">
        <link rel="stylesheet" href="css/default.css">
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
                                <p>Welcome <?php echo $username; ?></p>
                                <p><a href="../Controller/logout.php">Log Out</a></p> 
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
                        <a href="home.html" class="logo"><span>E</span> Shop.</a>
                        <form>
                            <input type="text" name="search" placeholder="Search...">
                            <button><i class="fas fa-search"></i></button>
                        </form>
                        <div class="cart">
                            <a href="#">
                                <span>1</span>
                                <i class="fas fa-shopping-bag"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="header__nav" class="header__bar">
                <div class="container">
                    <div class="header__bar__inner">
                        <ul>
                            <li><a href="home.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <div class="shop__tittle__banner">
                <div class="container">
                    <div class="shop__tittle__banner__inner">
                        <h1>PowerWave Wireless Charge</h1>
                        <p>Home / Product</p>
                    </div>
                </div>
            </div>

            <div class="shop__product">
                <div class="container">
                    <div class="shop__product__inner">
                        <div class="shop__product__text">
                            <div class="shop__product__tittle">
                                <h1>PowerWave Wireless Charge</h1>
                                <div class="shop__product__price">
                                    <span class="old__price">103.20</span>
                                    <span class="price">98.04</span>
                                </div>
                            </div>
                            <p class="text__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam et, aliquid eveniet nisi hic illum, est vel porro repudiandae assumenda repellendus natus veritatis laboriosam minima.</p>
                            <form>
                                <label for="quantity">Quantity :</label>
                                <div class="costum__input">
                                    <input type="number" value="1">
                                    <div id="plus">
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div id="minus"><span></span></div>
                                </div>
                                <button>Buy Now</button>
                            </form>
                            <p>Availability : In Stock</p>
                            <p>Shipping Tax : Free</p>
                        </div>

                        <div class="shop__product__photos">
                            <div class="shop__product__img">
                                <img src="img/product-1.png">
                            </div>
                            <div class="shop__product__img__nav">
                                <ul class="shop__thumbnails">
                                    <li class="shop__thumbnails__li active"><img src="img/product-1.png"></li>
                                    <li class="shop__thumbnails__li"><img src="img/product-2.png"></li>
                                    <li class="shop__thumbnails__li"><img src="img/product-3.png"></li>
                                    <li class="shop__thumbnails__li"><img src="img/product-4.png"></li>
                                </ul>
                            </div>
                        </div>
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