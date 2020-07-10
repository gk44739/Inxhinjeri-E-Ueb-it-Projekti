<?php
    require('../Model/user_repository.php');

    if(isset($_POST['sign__up__clicked'])){
        $username = $_POST["username_register"];
        $email = $_POST["email_register"];
        $password = $_POST["password_register"];
        $passwordmatch =$_POST["confirmpassword"];
        $roli = 1;

        if($password == $passwordmatch){
            $user = new User($username,$email,$password,$roli);
            if(register($user)){
                header("location: ../View/index.php");
            }else {
                ?>
                    <script>
                        window.location.href="../View/index.php";
                        alert("This email or username has already been registered");
                    </script>
                <?php
            }
        }else{
            header("location: ../View/index.php");
            ?>
                <script>
                    window.location.href="../View/index.php";
                    alert("Password not matching !");
                </script>
            <?php
        }
    } else {
        ?>
        <script>
            window.location.href="../View/index.php";
            alert("Account didn't create");
        </script>
        <?php
    }

    
?>