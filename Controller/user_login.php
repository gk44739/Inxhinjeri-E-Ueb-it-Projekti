<?php
include('../Model/user_repository.php');
	$username = $_POST["username_login"];
	$password = $_POST["password_login"];
	if(login($username, $password)){
		if(isAdmin($username)==0){
			header("location:../View/dashboard_home.php");
		}else{
			header("location:../View/home.php");
		}
	}else{

		header("location:../View/index.php");
		?>
        <script>alert("Account doesn't exist!");</script>
		
		<?php
		
	}

?>