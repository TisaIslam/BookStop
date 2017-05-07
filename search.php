<?php
	//searching for products
	$search = trim($_POST['search']);
	require_once('connect.php');
	$query="select * from sellitem where LOWER(title) LIKE LOWER('%".$search."%')";
        $result = mysqli_query($dbc, $query);
        $rows = array();
        while ($array = mysqli_fetch_row($result)) {
		//$rows[] = $array;	
		$item1='<tr><td class="cart_product"><a href=""><img src="'.$array[2].'" width="350" height="auto" alt=""></a></td>';


		$item2=	'<td class="cart_description"><h4><a href="#" style="color:blue" name="'.$array[0].'" onClick="detail(this.name)"> <u>'.$array[3].'</u></a></h4></td>';	

		$item3='<td class="cart_price"><p>'.$array[4].'</p></td>';
		$item6='<td class="cart_price"><p>'.$array[7].'</p></td></tr>';
		$ret=$ret.$item1.$item2.$item3.$item6;	
	}
	echo $ret;
        
        mysqli_close($dbc);
    


?>
