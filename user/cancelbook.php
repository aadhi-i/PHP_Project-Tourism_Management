<?php
	session_start();
	require('dbconnect.php');

	$book_id=$_GET['bid'];
	$q="update book_list set status_user='1' where book_id=$book_id";
	mysqli_query($con,$q) or die("Wrong Query");
    header("Location:bookings.php?cancel=1");
?>