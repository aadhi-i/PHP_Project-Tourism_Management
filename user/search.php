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
 .card{
			background-color: #525252;
		}
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
                    Searching...</li>
            </ul>
            </div>
</div>
</div>
</section>
<!-- breadcrumbs //-->
<section class="w3l-contact-info-main" id="contact">
    <div class="contact-sec	editContent">
        <div class="container">
        <?php
        if(!empty($_POST['search'])){
            require('dbconnect.php');
            $search=$_POST['search'];
            
            $q="select * from places where place='$search'";
            $res=mysqli_query($con,$q);
        if(($row=mysqli_fetch_assoc($res))>0){
            $placeid=$row['place_id'];

            $q1="select * from place_pack where place_id='$placeid'";
            $res1=mysqli_query($con,$q1);
            $row1=mysqli_fetch_assoc($res1);
            $pid=$row1['package_id'];

            $q2="select * from packages,mode where packages.mode_id=mode.mode_id and package_id='$pid'";
            $res2=mysqli_query($con,$q2);
            while(($row2=mysqli_fetch_assoc($res2))>0){
                $pid=$row2['package_id'];

					$q3="select * from rate_review where package_id='$pid'";
          			$res3=mysqli_query($con,$q3) or die("Worng query");

					$q4="select AVG(rate) AS avg_rate from rate_review where package_id='$pid'";
					$res4=mysqli_query($con,$q4);
					$rate=mysqli_fetch_column($res4);
					
					

					$place='';
					$q5="select place from places,place_pack where places.place_id=place_pack.place_id and place_pack.package_id='$pid'";
					$res5=mysqli_query($con,$q5);
					while ($row5=mysqli_fetch_assoc($res5)) {
                    $place=$place.$row5['place'].",";

            echo '<div class="container">
            <div class="row">
                <div class="card col-md-12 p-3 mt-4">
                    <div class="row ">
                        <div class="col-md-4">
                            <img alt="product" class="img-responsive " src="../Images/'.$row2['upload'].'">
                        </div>
                        <div class="col-md-8">
                            <div class="card-block">
                                <br><h5>'. $row2['title'] .'</h5><br>
                                <p class="pos-date"><span class="fa fa-clock-o mr-1"></span>'.$row2['no_days'].'</p><p class="pos-date text-right"><span class="fa fa-plane mr-1"></span> Transportation &nbsp: '.$row2['mode'].'</p>
								<p class="para">Places we include &nbsp:&nbsp'.rtrim($place,",").'</p> <br>
								<p class="para">'. $row2['description'] .'</p><br>
								<h5>$'. $row2['cost'] .'</h5><br>';
								if(mysqli_num_rows($res2)>0){
									echo "<h5><i style='color:yellow;' class='fa fa-star'></i> ". rtrim($rate, '.0') ." <span><a href='readmore.php?pid=$pid'><u>Read More</u></a></span></h5><br>";
								}
								if(($row2['status'])==1){
                               echo "<a href='booktrip.php?pid=$pid' class='action-button btn mt-lg-5 mt-4'>Book</a>";}
							   else{echo "<h5 style='color:red;'>Not Available</h5>";}
                            echo "</div>
                        </div>
                    </div>
                </div>";
                               
            }
        
        }
    }
    else{echo "<h5 style='color:red;'>No Packages Found</h5>";}
    }

        
        ?>
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