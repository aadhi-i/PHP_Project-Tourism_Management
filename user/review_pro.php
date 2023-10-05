<?php
	session_start();
	require('dbconnect.php');

	if (!empty($_POST)) {

		$book_id=$_GET['bid'];

		  $q="select * from book_list where book_id='$book_id'";
          $rs=mysqli_query($con,$q)or die("Wrong Query");
          $row=mysqli_fetch_assoc($rs);

          $package_id=$row['package_id'];

		$uid=$_SESSION['uid'];
		$rate=$_POST['rate'];
        $review=$_POST['review'];
		$q="insert into rate_review(uid,book_id,package_id,rate,review)values('$uid','$book_id','$package_id','$rate','$review')";
		mysqli_query($con,$q) or die("Wrong Query");
		header("Location:bookings.php?sui=1");
	}
?>