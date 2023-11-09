<?php
	session_start();
	require('dbconnect.php');

	$package_id=$_GET['pid'];

	$q=[
		0 => "update packages set status='0' where package_id=$package_id",
		1 => "update packages set status='1' where package_id=$package_id",
	  ];
	  $selectedValue = $_POST['act'];

	$result=mysqli_query($con,$q[$selectedValue]);
	if ($result) {
		header("Location:adpkg.php?done=1");
	  } else {
		die("Error");
	  }
?>