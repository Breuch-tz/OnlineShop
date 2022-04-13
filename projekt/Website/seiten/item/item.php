<?php
	require_once '../connection.php';
	
	$id=$_GET['id'];
	$query=mysqli_query($conn,"SELECT * FROM `produkte` WHERE ID='$id'");
	$row=mysqli_fetch_array($query);

	require_once 'style.php';

?>



