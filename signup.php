<?php


	//header('Access-Control-Allow-Origin: *');
	session_start();
	require_once('connect.php');
	$number=0;
	$name = trim($_POST['name']);
	$password = trim($_POST['password']);
	$email= trim($_POST['email']);

        $query="select count(id) from user where email=\"".$email."\"";
        $result = mysqli_query($dbc, $query);
        while ($row = mysqli_fetch_array($result)) {
            $number=intval($row['count(id)']);
        }
	if($number!=0){
		echo 'This E-mail Is Already Registered!';
		return;
	}
        $query = "INSERT INTO user (name, email, password) VALUES (?,?,?)";
        $stmt = mysqli_prepare($dbc, $query);
        mysqli_stmt_bind_param($stmt, "sss", $name, $email, $password);
        mysqli_stmt_execute($stmt);
	$_SESSION['login_user']= $email; 
	echo 'Success';
	mysqli_stmt_close($stmt);
        mysqli_close($dbc);



?>
