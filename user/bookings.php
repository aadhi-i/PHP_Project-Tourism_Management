<!--
   Author: W3layouts
   Author URL: http://w3layouts.com
-->
<?php
	require('menu.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="../Images/logo.png" type="image/icon type">
    <title>ThousandSunny</title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link href="//fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <style>
    .styled-table {
    text-align:center;
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 600px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: white;
    color: black;
    text-align: left;
}
.styled-table th,
.styled-table td {
    
    padding: 12px 15px;
}
.styled-table tbody tr {
  color:white;
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr{
    background-color: black;
    color:white;
    border:1px;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid white;
}
.cancel{
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        border-radius: 8px;
       background-color: red;
      }
      .cancel:hover {
        color: black;
       background-color: yellow;}
       .rate{
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        border-radius: 8px;
       background-color: blue;
      }
      .rate:hover {
       background-color: green;}
       
    </style>
  </head>
  <body id="home">


<!-- breadcrumbs -->
<section class="w3l-inner-banner-main">
    <div class="about-inner contact">
        <div class="breadcrumbs-sub">
            <ul class="breadcrumbs-custom-path">
                <li class="right-side propClone"><a href="index.php" class="editContent">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a> <p></li>
                <li class="active editContent">
                    Bookings</li>
            </ul>
            </div>
</div>
</div>
</section>
<!-- breadcrumbs //-->
<section class="w3l-contact-info-main" id="contact">
    <div class="contact-sec	editContent">
        <div class="container">
    <div class="map-content-9 mb-5 ">
    <?php
    if (isset($_SESSION['uid'])) {
      
      require('dbconnect.php');
      $uid=$_SESSION['uid'];
      $q="select * from book_list where uid=$uid";
      $result=mysqli_query($con,$q);
      

      if (mysqli_num_rows($result)>0)
      {
        echo "<div style='overflow-x:auto;'><table border=2px  class='styled-table' cellpadding=10px>
              <thead>
                <tr>
                  <th>Booking ID</th>
                  <th>Package</th>
                  <th>Admin Approval</th>
                  <th>Date Of Booking</th>
                  <th>Date of Tour</th>
                  <th>Number of Days</th>
                  <th>Number of Persons</th>
                  <th>Total Cost</th>
                  <th>What You Can Do</th>
                </tr>
              </thead>
              <tbody>";
              while($row=mysqli_fetch_assoc($result)){

                $bid=$row['book_id'];
                $pid=$row['package_id'];
                $q1="select * from packages where package_id=$pid";
                $res=mysqli_query($con,$q1);
                $row1=mysqli_fetch_assoc($res);

                $q2="select * from rate_review where rate_review.book_id=$bid";
                $res1=mysqli_query($con,$q2);

                echo "<tr>
                <td>".$row['book_id']."</td>
                <td>".$row1['title']."</td>";
                if (($row['status_admin'])==0) {
                  echo "<td>Pending</td>";
                }elseif (($row['status_admin'])==1){echo "<td style='color:green;'>Confirmed</td>";}elseif (($row['status_admin'])==2){echo "<td>";
                  if (mysqli_num_rows($res1)>0) {
                  echo "Rated</td>";
                }else{
                  echo "<a href='review.php?bid=$bid' class='rate' name='rate'>Rate Package</a></td>";}
                }
                else{echo "<td style='color:red;'>Cancelled</td>";}
                echo "<td>".$row['date_book']."</td>
                <td>".$row['from_date']."</td>
                <td>".$row1['no_days']."</td>
                <td>".$row['no_ppl']."</td>
                <td>$".$row['tcost']."</td>";
                if (($row['status_user'])==0 && (($row['status_admin'])==0 || ($row['status_admin'])==1) ){echo "<td><a href='cancelbook.php?bid=$bid' class='cancel' name='cancel'>Cancel</a></td>";}
                elseif(($row['status_admin'])==2){echo "<td>Hope You Enjoyed</td>";}
                else{echo "<td style='color:red;'>Cancelled</td>";}
              echo "</tr>";
              }
              echo "</tbody>
              </table></div>";
        
              }
            
              else{
                echo "<h3 style='color:white;text-align:center;'>No Bookings Yet</h3>";
              }
            }else{echo "<h3 style='color:white;text-align:center;'>Log In To Book Your Trip</h3>";}

              if (isset($_GET['cancel'])) {
                echo "<script>alert('Booking Cancelled ; Payment Refunded');</script>";
              }
              if (isset($_GET['tcost'])) {
                  $tcost=$_GET['tcost'];
                            echo "<script> var tcost='.$tcost.'; 
                            alert('Booking Successful, Total Amount : $${tcost}' );</script>";
                  
              }
              if (isset($_GET['sui'])) {
                echo "<script>alert('Review Added');</script>";
              }
            ?>
    </div>
    

        </div>
    </div>
</section>
<section class="w3l-footer-29-main">
	<div class="footer-29 py-5 ">
	  <div class="container">
		<div class="grid-col-4 footer-top-29">
			<div class="footer-list-29 footer-1">
				<h2 class="footer-title-29">Contact Us</h2>
				<ul>
					<li><p><span class="fa fa-map-marker"></span>Kochi, Ernakulam,
						Kerala,
						INDIA.</p></li>
            <li><a href="tel:+911234567890"><span class="fa fa-phone"></span> +(91)-1234567890</a></li>
					<li><a href="mailto:example@mail.com" class="mail"><span class="fa fa-envelope-open-o"></span> thousandsunny-mail@support.com</a></li>
				</ul>
				<div class="main-social-footer-29">
					<a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
					<a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
					<a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
					<a href="#google-plus" class="google-plus"><span class="fa fa-google-plus"></span></a>
					<a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
				</div>
			</div>
			<div class="footer-list-29 footer-2">
				<ul>
					<h6 class="footer-title-29">Category</h6>
					<li><a href="#pages">Event Travel</a></li>
					<li><a href="#pages">Holiday Trip</a></li>
					<li><a href="#pages">Group Tour</a></li>
					<li><a href="#pages">Package Holiday</a></li>
					<li><a href="#pages">Gap Year</a></li>
				</ul>
			</div>
			<div class="footer-list-29 footer-3">
				<div class="properties">
					<h6 class="footer-title-29">Latest Gallery</h6>
					<div class="images-col">
					<a href="blog-single.html"><img src="assets/images/blog1.jpg" class="img-responsive" alt=""></a>
					<a href="blog-single.html"><img src="assets/images/blog2.jpg" class="img-responsive" alt=""></a>
					<a href="blog-single.html"><img src="assets/images/blog3.jpg" class="img-responsive" alt=""></a>
					<a href="blog-single.html"><img src="assets/images/blog4.jpg" class="img-responsive" alt=""></a>
					<a href="blog-single.html"><img src="assets/images/blog5.jpg" class="img-responsive" alt=""></a>
					<a href="blog-single.html"><img src="assets/images/blog6.png" class="img-responsive" alt=""></a>
				</div>
			</div>
			</div>
			<div class="footer-list-29 footer-4">
				<ul>
					<h6 class="footer-title-29">Travel & Trip</h6>
					<li><a href="#url">	Japan</a></li>
					<li><a href="#url">	Italy</a></li>
					<li><a href="#url">North Macedonia</a></li>
					<li><a href="#url">	Czech Republic</a></li>
					<li><a href="#url">Germany</a></li>
				</ul>
			</div>
		</div>
		<div class=" bottom-copies text-center">
			<p class="copy-footer-29">@aadhi. © All rights reserved | Designed by <a href="//w3layouts.com">W3layouts</a></p>
		  </div>
		</div>
	</div>
  </section>

<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
	<span class="fa fa-chevron-up"></span>
</button>
<script>
	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function () {
		scrollFunction()
	};

	function scrollFunction() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			document.getElementById("movetop").style.display = "block";
		} else {
			document.getElementById("movetop").style.display = "none";
		}
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}
</script>
<!-- /move top -->

</body>

</html>