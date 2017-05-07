<?php


	//user removing his product
	require_once('connect.php');
	$id = trim($_POST['id']);
	$query="select * from sellitem where id=".$id;
	$result = mysqli_query($dbc, $query);
	$path="";
	while ($array = mysqli_fetch_row($result)){
		$path=$array[2];
	}
	$query="delete from sellitem where id=".$id;
	$result = mysqli_query($dbc, $query);
	if(strlen($path)!=0)
		unlink($path);
        mysqli_close($dbc);
    	echo 'Removed';


?>
