<?php
	if(isset($_POST['submit'])){
		session_start();
		$email=$_SESSION['login_user'];
		$title=trim($_POST['txt']);
		$btype=trim($_POST['btype']);
		$cond=trim($_POST['cond']);
		$msg=trim($_POST['message']);
		$price=trim($_POST['price']);

		$image = $_FILES['pic']['name'];
		$dest = "images/productimage/".basename($_FILES['pic']['name']);
		move_uploaded_file($_FILES['pic']['tmp_name'],$dest);
		require_once('connect.php');

		$query = "INSERT INTO sell(email, imstr,title,btype,cond,description,price) VALUES (?,?,?,?,?,?,?)";
		$stmt = mysqli_prepare($dbc, $query);
		mysqli_stmt_bind_param($stmt, "sssssss", $email, $dest, $title,$btype,$cond,$msg,$price);
		mysqli_stmt_execute($stmt);
	
		mysqli_stmt_close($stmt);
		mysqli_close($dbc);
		header("location: redirect");
	}

?>
