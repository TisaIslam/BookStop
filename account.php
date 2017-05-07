<?php
	session_start();
	if(!isset($_SESSION['login_user'])){
		$_SESSION['user']='account';
		echo "login";
	}
	else{
		$email=$_SESSION['login_user'];
		require_once('connect.php');
		$query="select * from user where email=\"".$email."\"";
		$result = mysqli_query($dbc, $query);
		$rows = array();
		$ret='';
		while ($array = mysqli_fetch_row($result)) {
			$item1='<div class="boxes"><h4>Name</h4><font size="3">'.$array[1].'</font></div><br>';
			$item2='<a href="changeEMail.html"><div class="boxes"><h4 style="color:black;">Email</h4><p style="float:left;color:black;">'.$array[2].'</p><i class="fa fa-angle-right"style="font-size:48px;float:right;margin-top:-30px;"></i></div></a><br>';
			$item3='<a href=""data-toggle="modal"data-target="#myModal" ><div class="boxes"><h4 style="color:black;">Change Password</h4><i class="fa fa-angle-right"style="font-size:48px;float:right;margin-top:-30px;"></i></div></a><br>';
			$item4='<a href="items.php"><div class="boxes"><h4 style="color:black;">Items</h4><i class="fa fa-angle-right"style="font-size:48px;float:right;margin-top:-30px;"></i></div></a><br><br><br><br>';
			$ret=$ret.$item1.$item2.$item3.$item4;
		}
		echo $ret;
       		mysqli_close($dbc);
	}
?>




