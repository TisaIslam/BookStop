<?php


	
	require_once('connect.php');
	$name = trim($_POST['name']);
	$email= trim($_POST['email']);
	$subject= trim($_POST['subject']);
	$msg=trim($_POST['message']);

        $query = "INSERT INTO comments (name, email, subject,message) VALUES (?,?,?,?)";
        $stmt = mysqli_prepare($dbc, $query);
        mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $subject,$msg);
        mysqli_stmt_execute($stmt);
	
	mysqli_stmt_close($stmt);
        mysqli_close($dbc);
	echo 'Success';
	header("Location: redirect");
	//echo $name."<br>".$email."<br>".$subject."<br>".$msg;

?>
