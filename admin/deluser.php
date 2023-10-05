<?php
	session_start();
	require('dbconnect.php');

	$uid=$_GET['uid'];
	$q="delete from users where uid=$uid";
	mysqli_query($con,$q) or die("Wrong Query");

	$q1="delete from book_list where uid=$uid";
	mysqli_query($con,$q1) or die("Wrong Query");

    $q2="delete from rate_review where uid=$uid";
	mysqli_query($con,$q2) or die("Wrong Query");

    header("Location:adusers.php?ok=1");
?>