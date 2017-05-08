<?php
	if(isset($_POST['submit'])){
		session_start();
		$email=$_SESSION['login_user'];
		$title=trim($_POST['txt']);
		$btype=trim($_POST['btype']);
		$cond=trim($_POST['cond']);
		$msg=trim($_POST['message']);
		$price=trim($_POST['price']);
		$ran=rand(100000,900000);
		$image = $_FILES['pic']['name'];
		$dest = "images/productimage/".$ran.basename($_FILES['pic']['name']);
		move_uploaded_file($_FILES['pic']['tmp_name'],$dest);
		require_once('connect.php');

		$query = "INSERT INTO sell(email, imstr,title,btype,cond,description,price) VALUES (?,?,?,?,?,?,?)";
		$stmt = mysqli_prepare($dbc, $query);
		mysqli_stmt_bind_param($stmt, "sssssss", $email, $dest, $title,$btype,$cond,$msg,$price);
		mysqli_stmt_execute($stmt);
	
		mysqli_stmt_close($stmt);
		mysqli_close($dbc);
		require("PHPMailer-master/PHPMailerAutoload.php");
		$mail = new PHPMailer(); // create a new object
		$mail->IsSMTP(); // enable SMTP
		$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
		$mail->SMTPAuth = true; // authentication enabled
		$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 465; // or 587
		$mail->IsHTML(true);
		$mail->Username = "bookstopdu@gmail.com";
		$mail->Password = "bookstop2017";
		$mail->SetFrom("bookstopdu@gmail.com");
		$mail->Subject = "Pending Item";
		$mail->Body = "Greetings from BookStop! Your request has been recorded. Check your items in account to see approved posts";
		$mail->AddAddress($email);

		 if(!$mail->Send()) {
			echo "error sending mail";
		 }

		header("location: redirect");
	}

?>
