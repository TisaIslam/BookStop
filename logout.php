<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
	setcookie("debug", "", time() - 3600);
	header("Location: index"); // Redirecting To Home Page
}
?>

