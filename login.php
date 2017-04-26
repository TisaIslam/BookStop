<?php


	//header('Access-Control-Allow-Origin: *');
	$password = trim($_POST['password']);
	$email= trim($_POST['email']);
    	$temp="";
	require_once('connect.php');
	$query="select password from user where email=\"".$email."\"";
	$flag=0;
        $result = mysqli_query($dbc, $query);
        while ($row = mysqli_fetch_array($result)) {
            $temp=$row['password'];
            $flag=1;
        }
        if($flag==0)
		echo 'Incorrect E-mail!';
	else{
		if(!strcmp($password,$temp)){
			session_start();
			$_SESSION['login_user']= $email; 
			echo 'Success!';
		}
		else
			echo 'Incorrect Password!';
	}
        mysqli_close($dbc);
    


?>
