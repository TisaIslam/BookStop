<?php
session_start();
if(!isset($_SESSION['login_user'])){
	$_SESSION['user']='s';
	header("location: login");
}
?>
