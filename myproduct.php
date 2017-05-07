<?php

	//fetching products that a user is selling
	session_start();
	if(!isset($_SESSION['login_user'])){
		echo "login";
	}
	else{
		$email=$_SESSION['login_user'];
		if(strlen($email)==0)
			$email="abc";
		require_once('connect.php');
		$query='select * from sellitem where email="'.$email.'"';
        	$result = mysqli_query($dbc, $query);
		$rows = array();
		$ret='';
		$i=1;
        	while ($array = mysqli_fetch_row($result)) {
			$item1='<tr><td class="cart_product"><a href=""><img src="'.$array[2].'" width="350" height="auto" alt=""></a></td>';
			$item2=	'<td class="cart_description"><h4><a href="">'.$array[3].'</a></h4><p>'.$array[6].'</p></td>';	
			$item3='<td class="cart_price"><p>'.$array[4].'</p></td>';
			$item4='<td class="cart_price"><p>'.$array[5].'</p></td>';
			$item6='<td class="cart_price"><p>'.$array[7].'</p></td>';
			$item7='<td><button name="'.$array[0].'" id="button'.$i.'" onClick="remove(this.id,this.name)" class="editbtn">Remove</button></td></tr>';
			$i=$i+1;
			$ret=$ret.$item1.$item2.$item3.$item4.$item6.$item7;
		}
		echo $ret;
        	mysqli_close($dbc);
    	}


?>
