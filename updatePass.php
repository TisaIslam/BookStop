<?php

	session_start();
	require_once('connect.php');
	if(!isset($_SESSION['login_user'])){
		echo "Please login first";
	}
	else{
		$number=0;
		$password = trim($_POST['password']);
		$email=$_SESSION['login_user']; 
        	$query='update user set password="'.$password. '" where email="'.$email.'"';
        	$result = mysqli_query($dbc, $query);
		echo 'Success';
	}
        mysqli_close($dbc);



?>
