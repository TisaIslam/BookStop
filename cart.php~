<?php


	require_once('connect.php');
	if(!isset($_COOKIE['debug']){
		echo '<tr><td colspan="4">&nbsp;</td><td colspan="2"><table class="table table-condensed total-result"><tr><td>Total</td><td><span id="total">BDT 0</span></td></tr></table></td></tr>';


	}
	else{
	$var="";
	$pieces=explode(",",$_COOKIE['debug']);
	for($x=0;$x<count($pieces);$x++){
		if(strlen($pieces[$x])!=0)
			$var=$var.$pieces[$x].",";
	}
	$var=$var."-1";

	$query="select * from sellitem WHERE id IN (".$var.")";
        $result = mysqli_query($dbc, $query);
	$rows = array();
	$ret='';
	$i=1;
	$price=0;
        while ($array = mysqli_fetch_row($result)) {
		$item1='<tr><td class="cart_product"><a href=""><img src="'.$array[2].'" width="200" height="auto" alt=""></a></td>';
		$item2=	'<td class="cart_description"><h4><a href="">'.$array[3].'</a></h4><p>'.$array[6].'</p></td>';	
		$item3='<td class="cart_price"><p>'.$array[4].'</p></td>';
		$item4='<td class="cart_price"><p>'.$array[5].'</p></td>';
		$item5='<td> <input class="cart_quantity_input" type="number" id="q'.$array[0].'"  name="1" onkeyup="update(this.id,this.name)" value="1" autocomplete="off" size="1"></td>';
		$item6='<td class="cart_price"><p id="p'.$array[0].'" name="'.$array[7].'" >'.$array[7].'</p></td>';
		$item7='<td><button name="'.$array[0].'" id="button'.$i.'" onClick="remove(this.id,this.name)" class="editbtn">Remove</button></td></tr>';
		$i=$i+1;
		$ret=$ret.$item1.$item2.$item3.$item4.$item5.$item6.$item7;
		$price=$price+intval($array[7]);
	}
	$total='<tr><td colspan="4">&nbsp;</td><td colspan="2"><table class="table table-condensed total-result"><tr><td>Total</td><td><span id="total">BDT '.$price.'</span></td></tr></table></td></tr>';
	echo $ret.$total;
	}
        mysqli_close($dbc);

    


?>
