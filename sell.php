<?php include 'redirect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sell | E-Shopper</title>
	

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<script src="js/img_input.js"></script>
	<script src="js/price_check.js"></script>
	<script src="js/search.js"></script>
	<script src="js/option.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body onload="optionloader();">
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index"><img src="images/home/logo.png" alt="" /></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right" id="options">
							<ul class="nav navbar-nav">
								<li><a href="account"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="cart"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="login"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index" >Home</a></li>
								<li><a href="buy" >Buy</a></li>
								
								<li><a href="sell" class="active">Sell</a>
                                    
                                </li> 
								<li><a href="contact-us">Contact Us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" id="search" onkeypress="handle(event)" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->






	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					
				</div>

				<div class="col-sm-6">
					<div class="blog-post-area">
						<h2 class="title text-center">Sell an item</h2>
						<div class="single-blog-post">
							
							<form action="sell2.php"  method="POST" enctype="multipart/form-data">
								<p id="showMessage" style="color:red;"></p>
								<input type="file" name="pic" id="pic" accept="image/jpeg, image/png, image/jpg" onchange="getimg(this);" required>
								<img id="blah" src="#" style="max-height: 50%; max-width: 50%" alt="" />
								<br><br>
								<input name="txt" id="txt" type="text" placeholder="Title" required>
								<br><br>
								
								<select name="btype" id="btype">
										<option>Text Book</option>
										<option>Story Book</option>
										
								</select>
								<br><br>
								
								<select name="cond" id="cond">
										<option>New</option>
										<option>Used</option>
										
								</select>
								<br><br>
								<textarea name="message" id="message"  placeholder="Description" rows="7"></textarea>
								<br><br>
								<input name="price" id="price" type="number" placeholder="Price (Tk)" 										onkeypress="return isNumberKey(event)" required/>	
								
								<br><br><center><button type="submit" name="submit" id="subb" class="btn 										btn-default" onClick="changeVal();" style="background: #5560f6; color:white">Submit Item</button></center>	
					
							</form>
						</div>
						
						<div class="pagination-area">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	






		<footer id="footer"><!--Footer-->
		<div class="footer-top">
			
		</div>
		
		<div class="footer-widget">
			
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2017 BookStop</p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
    <script src="js/img_input.js"></script>
	 <script src="js/price_check.js"></script>
	
</body>
</html>
