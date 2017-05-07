<?php
	//code for showing product details
	require_once('connect.php');
	$search = trim($_POST['search']);
	$query='select * from sellitem where id='.$search;
        $result = mysqli_query($dbc, $query);
	$rows = array();
	$ret='';
	$i=1;
        while ($array = mysqli_fetch_row($result)) {
		$item0='<div class="col-sm-5"><div class="view-product"><img src="'.$array[2].'" alt="" width="450" height="auto" /></div></div>';
		$item1='<div class="col-sm-7"><div class="product-information" ><h2><big>'.$array[3].'</big></h2>';
		$item2='<p>'.$array[6].'</p>';
		$item3='<span><span>TK'.$array[7].'<button type="button" value="'.$array[0].'" onClick="loadmodal2(this.value);" class="btn btn-fefault cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></span>';
		$item4='<p><b>Availability: </b> In Stock</p>';
		$item5='<p><b>Condition: </b>'.$array[5].'</p>';
		$item6='<p><b>Type:</b>'.$array[4].'</p><br><br></div></div>';
		
		$ret=$ret.$item0.$item1.$item2.$item3.$item4.$item5.$item6;
	}
	echo $ret;
        mysqli_close($dbc);
    


?>
