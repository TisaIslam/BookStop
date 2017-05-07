
<?php
 
	require("PHPMailer-master/PHPMailerAutoload.php");

    	$email= trim($_POST['email']);
	$ran=rand(100000,900000);
	$pass=(string)$ran;
	
	require_once('connect.php');
	//echo $pass;
	$query='update user set password="'.$pass.'" where email="'.$email.'"';
	//echo $query;
	$result = mysqli_query($dbc, $query);
	$temp="";
	$flag=0;
	
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
	$mail->Subject = "New Password";
	$mail->Body = "Your new password is: ".$pass."<br><br>If you want to change it,go to account->change password<br>";
	$mail->AddAddress($email);

	 if(!$mail->Send()) {
		echo "error sending mail";
	 }

	
	echo "Check Your email";

 
?>
