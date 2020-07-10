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
        <link rel="stylesheet" href="css/contact.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/fontawesome.css">
        <link rel="stylesheet" href="css/default.css">
    </head>
    <body>
        <header>
            <div class="header__top">
                <div class="container">
                    <div class="header__top__inner">
                        <p>Welcome to Our Store !</p>
                        <p><a href="index.html">Sing In / Log In</a></p>
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
            <div class="contact__tittle__banner">
                <div class="container">
                    <div class="contact__tittle__banner__inner">
                        <h1>Contact Us</h1>
                        <p>Home / Contact Us</p>
                    </div>
                </div>
            </div>
            <div class="conatact__main">
                <div class="container">

                    <div class="conatact__main__inner">

                        <div class="info">
                            <div class="store_information">
                                <h3><i class="fas fa-map-marker-alt"></i> Store Information</h3>
                                <p>Single</p>
                                <p>France</p>
                            </div>
                            <div class="email_contact">
                                <h3><i class="fas fa-envelope"></i> Email Contact</h3>
                                Email Us: admin@admin.com
                            </div>
                        </div>

                        <div class="contact_form_contaier">
                            <h1>Contact Form</h1>
                            <form action="">
                                <div class="form_item">
                                    <label for="subject">Subject</label>
                                    <select id="subject">
                                        <option selected="selected" value="">Customer Sevice</option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                      </select>
                                </div>
                                <div class="form_item">
                                    <label for="email">Email</label>
                                    <input name="email" class="custom-file-input" placeholder="Your@email.com" type="email">
                                </div>
                                <div class="form_item attc">
                                    <span>Attachment</span>
                                    <div class="form_item_inner">                                    
                                        <label class="fileContainer">
                                            <i class="fas fa-folder-open"></i> Choose File <input type="file"/>
                                        </label>
                                        <span class="optional"> Optional</span>
                                    </div>
                                </div>

                                <div class="message_item">
                                    <label for="file">Message</label>
                                    <textarea placeholder="How can we help?"></textarea>
                                </div>
                                <button class="submit_button" type="submit">Send</button>

                            </form>
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