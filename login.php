<?php


	session_start();
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
			$_SESSION['login_user']= $email; 
			if(isset($_SESSION['user'])){
				unset($_SESSION['user']);
				echo 'Success!';
				setcookie("debug", "", time() - 3600);
			}
			else{
				echo 'Success!';
				setcookie("debug", "", time() - 3600);
			}
		}
		else
			echo 'Incorrect Password!';
	}
        mysqli_close($dbc);
    


?>
