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
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/fontawesome.css">
        <link rel="stylesheet" href="css/default.css">
    </head>
<body>
    <div class="login__signup">
        <div class="login__signup__inner">

            <div class="login__form">
                <h1>Login</h1>
                <form action="../Controller/user_login.php" method="POST" onsubmit="return kycu()">
                    <input type="text" name="username_login" placeholder="Username" id="username">
                    <br>
                    <input type="password" name="password_login" placeholder="Password" id="pass">
                    <p><a href="#" id="forgot__rid">Forgot your password ?</a></p>
                    <button>LOG IN</button>
                </form>
            </div>

            <div class="signup__form">
                <h1>Sign Up</h1>
                <form action="../Controller/user_register.php" method="POST" onsubmit="return regjistrohu()">
                    <input type="text" name="username_register" placeholder="Username" id="userReg">
                    <br>
                    <input type="text" name="email_register" placeholder="Email" id="email">
                    <br>
                    <input type="password" name="password_register" placeholder="Password" id="passReg">
                    <br>
                    <input type="password" name="confirmpassword" placeholder="Confirm Password" id="passConReg">
                    <button name="sign__up__clicked">SIGN UP</button>
                </form>
            </div>

            <div class="forgot_password__form">
                <h1>Forgot Password</h1>
                <form action="" method="POST" onsubmit="return forgotPassword()">
                    <input type="text" name="username_forgot" placeholder="Username" id="usernameForgot">
                    <br>
                    <input type="text" name="email_forgot" placeholder="Email" id="emailForgot">

                    <button name="change_password">Send Request</button>
                </form>
            </div>

            <div class="login__description">
                <h1>Welcome to the Logo.</h1>
                <p>Welcome to our elecrtonic shop if you are not a member please sign up by clicking the button below or go to the <a href="home.php">Shop.</a></p>
                <button id="signup__rid">SIGN UP</button>
            </div>
                    
            <div class="signup__description">
                <h1>Welcome to the Logo.</h1>
                <p>If you have an account you can log in or go shopping right away <a href="home.php">Shop.</a></p>
                <button id="login__rid">LOG IN</button>
            </div>

                    
            </div>
        </div>
    </div>
    <script src='js/main.js'></script>
    <script src='js/login-validation.js'></script>
</body>
</html>