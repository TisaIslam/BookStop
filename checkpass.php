<?php
	session_start();
	require_once('connect.php');
	$pass=trim($_POST['password']);
	$email=$_SESSION['login_user'];
	$query="select password from user where email=\"".$email."\"";
	$result = mysqli_query($dbc, $query);
	$temp="";
	while ($row = mysqli_fetch_array($result)) {
            $temp=$row['password'];
        }

	if(!strcmp($pass,$temp)){
		echo 'Success';
	}
	else
		echo 'Incorrect Password!';
	mysqli_close($dbc);
?>
