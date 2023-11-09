<?php
	session_start();
	require('dbconnect.php');

	if (!empty($_POST)) {

		$package_id=$_GET['pid'];
		
        $q="select * from packages where package_id='$package_id'";
        $rs=mysqli_query($con,$q)or die("Wrong Query");
        $row=mysqli_fetch_assoc($rs);


		$uid=$_SESSION['uid'];
		$from_date=$_POST['from_date'];
		$no_ppl=$_POST['no_ppl'];
		$tcost=($row['cost']*$no_ppl);
		$q="insert into book_list(uid,package_id,from_date,no_ppl,tcost)values('$uid','$package_id','$from_date','$no_ppl',$tcost)";
		mysqli_query($con,$q) or die("Wrong Query");
		header("Location:bookings.php?tcost=$tcost");
	}
?>