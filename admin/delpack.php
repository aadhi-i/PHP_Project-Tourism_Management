<?php
	session_start();
	require('dbconnect.php');

	$package_id=$_GET['pid'];
	$q="delete from packages where package_id=$package_id";
	mysqli_query($con,$q) or die("Wrong Query");
	$q1="delete from place_pack where package_id=$package_id";
	mysqli_query($con,$q1) or die("Wrong Query");
    header("Location:adpkg.php?ok=1");
?>