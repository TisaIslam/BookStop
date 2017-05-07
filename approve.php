<?php


	//code for approving items
	require_once('connect.php');
	$id = trim($_POST['id']);
	$query="insert into sellitem (email,imstr,title,btype,cond,description,price) select email,imstr,title,btype,cond,description,price 		from sell where id=".$id;
        $result = mysqli_query($dbc, $query);
	$query="delete from sell where id=".$id;
	$result = mysqli_query($dbc, $query);
        mysqli_close($dbc);
    	echo 'Approved';


?>
