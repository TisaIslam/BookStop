<?php

	session_start();
	$new= trim($_POST['email']);
	$email=$_SESSION['login_user'];
	require_once('connect.php');
	
	$query='update user set email="'.$new.'" where email="'.$email.'"';	
	$result = mysqli_query($dbc, $query);
	$_SESSION['login_user']= $new; 
	echo 'Success';
        mysqli_close($dbc);
?>
