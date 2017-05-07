<?php
	session_start();
	if(!isset($_SESSION['login_user'])){
		echo 'login';
	}
	else{
		$email=$_SESSION['login_user'];
		echo $email;
	}
?>
