<?php

	//mailing at checkout
	require_once('connect.php');
	require("PHPMailer-master/PHPMailerAutoload.php");
	$name= trim($_POST['name']);
	$email= trim($_POST['email']);
	$address= trim($_POST['address']);
	$mobile= trim($_POST['mobile']);
	$note= trim($_POST['note']);
	$type= trim($_POST['type']);
	$bill= trim($_POST['bill']);
	$var="";
	$pieces=explode(",",$_COOKIE['debug']);
	for($x=0;$x<count($pieces);$x++){
		if(strlen($pieces[$x])!=0)
			$var=$var.$pieces[$x].",";
	}
	$var=$var."-1";
	//echo $var;
	function writeMsg($sender,$body) {
    		
		$mail = new PHPMailer(); // create a new object
		$mail->IsSMTP(); // enable SMTP
		$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
		$mail->SMTPAuth = true; // authentication enabled
		$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 465; // or 587
		$mail->IsHTML(true);
		$mail->Username = "	bookstopdu@gmail.com";
		$mail->Password = "bookstop2017";
		$mail->SetFrom("bookstopdu@gmail.com");
		$mail->Subject = "New Order";
		$mail->Body = $body;
		$mail->AddAddress($sender);
		if(!$mail->Send()) {
			echo 'error';
		 }

	}
	$query="select * from sellitem WHERE id IN (".$var.")";
        $result = mysqli_query($dbc, $query);
	$rows = array();
	$ret='Greetings from BookStop! Your total order:<br>';
        while ($array = mysqli_fetch_row($result)) {
		$body="Greetings from BookStop! You have a new order for ".$array[3].". <br>Buyer details:<br>Name: ".$name."<br> Address: ".$address."<br> Mobile: ".$mobile."<br> Email: ".$email."<br> Optional Additional Note: ".$note;
		writeMsg($array[1],$body);
		$ret=$ret.$array[3]."<br>";
	}
	
	$ret=$ret."Total: ".$bill."<br> You will be contacted shortly!";
	writeMsg($email,$ret);
	echo '<div class="bg"><div class="row"><div class="col-sm-8"><div class="contact-form"><h2 class="title text-center">Get In Touch</h2><div class="status alert alert-success" style="display: none"></div><center><div class="boxed">Your order has been processed. Please check your email!</div></center></div></div><div class="col-sm-4"><div class="contact-info"><h2 class="title text-center">Contact Info</h2><address><p>  BookStop</p><p>  University Of Dhaka</p><p>  Dhaka, Bangladesh</p><p>  Mobile: +8801926225385</p><p>  Email: bookstopdu@gmail.com</p></address></div></div></div></div>';	;
        mysqli_close($dbc);

?>
