<?php


	session_start();
	if(!isset($_SESSION['login_user'])){
		$ret='<ul class="nav navbar-nav"><li><a href="account"><i class="fa fa-user"></i> Account</a></li><li><a href="cart"><i class="fa fa-crosshairs"></i> Checkout</a></li><li><a href="cart"><i class="fa fa-shopping-cart"></i> Cart</a></li><li><a href="login"><i class="fa fa-lock"></i> Login</a></li></ul>';
		echo $ret;
	}
	else{

		$ret='<ul class="nav navbar-nav"><li><a href="account"><i class="fa fa-user"></i> Account</a></li><li><a href="cart"><i class="fa fa-crosshairs"></i> Checkout</a></li><li><a href="cart"><i class="fa fa-shopping-cart"></i> Cart</a></li><li><a href="logout.php"><i class="fa fa-lock"></i> Logout</a></li></ul>';
		echo $ret;

	}


?>
