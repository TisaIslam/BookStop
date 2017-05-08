<?php
	//code for showing other category products	
	require_once('connect.php');
	$query="select * from sellitem where btype='Story Book'";
        $result = mysqli_query($dbc, $query);
	$rows = array();
	$ret='';
	$i=1;
        while ($array = mysqli_fetch_row($result)) {
		$item1='<div class="product-image-wrapper" ><div class="single-products"style ="float:left"><div class="productinfo text-center"> <img src="'.$array[2].'" alt="" />';
		$pri=$array[7];
		$str="TK ". (string)$pri;
		$item2='<p>'.$str.'</p>';
		$item3='<p>'.$array[3].'</p>';
		$item4='<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a></div>';
		
		$item5='<div class="product-overlay"><div class="overlay-content"><p></p></td>';
		$item6='<a href="#" name="'.$array[0].'" onClick="detail(this.name)" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Details</a><br>';
		$item7='<a href="#" name="'.$array[0].'" onClick="create(this.name,1);return false;" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a></div></div></div></div>';
		
		
		$ret=$ret.$item1.$item2.$item3.$item4.$item5.$item6.$item7;
	}
	echo $ret;
        mysqli_close($dbc);
    


?>
