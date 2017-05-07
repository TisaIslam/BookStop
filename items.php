<?php
	session_start();
	if(!isset($_SESSION['login_user'])){
		header("location: login");
	}
	else{	
		$email=$_SESSION['login_user'];
		require_once('connect.php');
		$query="select count(id) from admin where email=\"".$email."\"";
		$result = mysqli_query($dbc, $query);
		$number=0;
        	while ($row = mysqli_fetch_array($result)) {
            		$number=intval($row['count(id)']);
        	}
		if($number!=0){
			header("location: pending");
		
		}
		else{
			header("location: myproduct");
		}
		mysqli_close($dbc);
	
	}
       	

?>




