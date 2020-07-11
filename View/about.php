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
        <link rel="stylesheet" href="css/about.css">
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
                        <a href="home.php" class="logo"><span>E</span> Shop.</a>
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
                            <li><a href="home.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        
        <main>
            <div class="about__main">
                <div class="container">
                    <div class="about__main__inner">
                        <h1>About Us</h1> 
                        <p>Home/About Us</p>
                    </div>
                </div>
            </div>
                <div class="about__main__how">
                    <div class="container">
                        <div class="about__main__how">
                            <div class="div__main2">
                                <img class="main2__photo" src="img/peoplewithphones.jpg">
                            </div>
                            <div class="div1__main2">
                                <h1>Who we are ?</h1>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                    Aut voluptate earum ab? Quidem debitis quam accusantium 
                                    animi, consectetur nostrum fuga dolor voluptatum ad ratione,
                                    cumque quaerat incidunt distinctio nisi aut.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    Repellendus nesciunt ex voluptate laudantium obcaecati ipsa
                                    in necessitatibus perferendis magni cum vel autem, blanditiis
                                    quasi! Explicabo unde ut velit doloribus dolorum!
                                    Aut voluptate earum ab? Quidem debitis quam accusantium 
                                    animi, consectetur nostrum fuga dolor voluptatum ad ratione.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="about__main3">
                    <div class="container">
                        <h1>Our Team</h1>
                        <div class = "inner__container1">
                            <div class="human">
                                <img class="imghuman" src="img/person1.png">
                                <h2 class="peoplename">Adrian Corey</h2>
                                <p class="jobs">Developer</p>
                            </div>
                            <div class="human">
                                <img class="imghuman" src="img/person2.png">
                                <h2 class="peoplename">Susan Crossman</h2>
                                <p class="jobs">Developer</p>
                            </div>
                            <div class="human">
                                <img class="imghuman" src="img/person3.png">
                                <h2 class="peoplename">Stephen Jenkin</h2>
                                <p class="jobs"></p>Developer</p>
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
