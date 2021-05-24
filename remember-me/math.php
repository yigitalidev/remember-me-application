<?php 
session_start();


if (isset($_POST['user_login'])) {
	

	if ($_POST['kadi']=="admin" && $_POST['pass']=="123456") {
		
		$_SESSION['kadi']=$_POST['kadi'];
		$_SESSION['pass']=$_POST['pass'];

		if (isset($_POST['remember_me'])) {

	

			setcookie("kadi","admin",strtotime("+1 day"));
			setcookie("pass","123456",strtotime("+1 day"));
			
		} else {



			setcookie("kadi","admin",strtotime("-1 day"));
			setcookie("pass","123456",strtotime("-1 day"));
		}

		header("Location:index.php?durum=true");
		exit;
	} else {

		//giriş bilgileri doğru değilse
		header("Location:index.php?durum=false");
		exit;
	}



}

 ?>