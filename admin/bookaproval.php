<?php
	session_start();
	require('dbconnect.php');

	$book_id=$_GET['bid'];

	$q=[
		0 => "update book_list set status_admin='0' where book_id=$book_id",
		1 => "update book_list set status_admin='1' where book_id=$book_id",
		2 => "update book_list set status_admin='2' where book_id=$book_id",
		3 => "update book_list set status_admin='3' where book_id=$book_id",
	  ];
	  $selectedValue = $_POST['aprove'];

	$result=mysqli_query($con,$q[$selectedValue]);
	if ($result) {
		header("Location:bookings.php?done=1");
	  } else {
		die("Error");
	  }
?>
