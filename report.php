
<?php
 
	require("PHPMailer-master/PHPMailerAutoload.php");

    	$email= trim($_POST['email']);
	$ran=rand(100000,900000);
	$pass=(string)$ran;
	
	require_once('connect.php');
	
	$query='select password from user where email="'.$email.'"';
	
	$temp="";
	$flag=0;
	$str="";
	$result = mysqli_query($dbc, $query);
	$rows = array();
	while ($array = mysqli_fetch_array($result)) {
            $temp=$array['password'];
            $flag=1;
        }
        if($flag==0){
		$str='Incorrect E-mail!';
		echo $str;
	}
	else{	
		$query='update user set password="'.$pass.'" where email="'.$email.'"';
		$result = mysqli_query($dbc, $query);
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
	}
	 mysqli_close($dbc);

 
?>
