
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
		.card{
			background-color: #272829;
		}
	</style>
  </head>
<body id="home">

<section class="w3l-main-slider" id="home">
  <!-- main-slider -->
  <div class="companies20-content">
    
    <div class="owl-one owl-carousel owl-theme">
      <div class="item text-center">
        <li>
          <div class="slider-info banner-view bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mr-auto">
                  <h5>Welcome ,<br>
                    Let’s Travel</h5>
                  <p>We offer you the best experience for your holidays. Make memories with your loved ones ! Explore the birght colours of the world with us !</p>
                  <a class="btn btn-theme2 mt-lg-5 mt-4" href="#top">Book Your Trip</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item text-center">
        <li>
          <div class="slider-info  banner-view banner-top1 bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mr-auto">
                  <h5>Welcome ,<br>
                    Let’s Travel </h5>
                  <p>We offer you the best experience for your holidays. Make memories with your loved ones ! Explore the birght colours of the world with us !</p>
                   <a class="btn btn-theme2 mt-lg-5 mt-4" href="#top">Book Your Trip</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item text-center">
        <li>
          <div class="slider-info  banner-view banner-top2 bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mr-auto">
                  <h5>Welcome ,<br>
                  Let’s Travel</h5>
                  <p>We offer you the best experience for your holidays. Make memories with your loved ones ! Explore the birght colours of the world with us !</p>
                   <a class="btn btn-theme2 mt-lg-5 mt-4" href="#top">Book Your Trip</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
    </div>
  </div>
  <script src="assets/js/owl.carousel.js"></script>
  <!-- script for -->
  <script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        responsiveClass: true,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: true
          },
          1000: {
            items: 1,
            nav: true
          }
        }
      })
    })
  </script>
  <!-- //script -->
  <!-- /main-slider -->
</section>

<section class="w3l-call-to-action_9">
    <div class="call-w3">
        <div class="container">
            <div class="booking-form-content">
                <div class="main-titles-head ">
                <h3 class="header-name">Get the Best Holiday Planned by Experts!
                </h3>
                <p class="tiltle-para editContent ">With more than a decade of experice and world-class guides , We plan it the best for you ! </p>
              </div>
            </div>
        </div>
    </div>
</section>
<section class="w3l-specification-6">
    <div class="specification-layout editContent">
        <div class="container-fluid">
            <div class="row text-left img-grids">
				<div class="col-lg-6 p-0">
					<div class="images-right">
						<div class="p-md-5 p-3">
							<h4><a href="#url">Russian Tour</a></h4>
							<p>Moll itia placeat modi volup tatem tenetur conse quatur.Conseq tenetur conse quatur adipi sicing elit. </p>

						</div>
					</div>
				</div>

				<div class="col-lg-6 p-0">
					<div class="four-grids">
				<div class="images-text">
					<div class="ser-bg1">
						<div class="p-md-5 p-3">
							<h4><a href="#url">French-Polynesia</a></h4>
							<p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit. </p>

						</div>
					</div>
				</div>
				<div class="images-text">
					<div class="ser-bg4">
						<div class="p-md-5 p-3">
							<h4><a href="#url">The Great Britain Tour</a></h4>
							<p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit. </p>

						</div>
					</div>
				</div>
				<div class="images-text">
					<div class="ser-bg2">
						<div class="p-md-5 p-3">
							<h4><a href="#url">Australian Nature</a></h4>
							<p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit. </p>
						</div>
					</div>
				</div>
				<div class="images-text">
					<div class="ser-bg3">
						<div class="p-md-5 p-3">
							<h4><a href="#url">Turkish Empire</a></h4>
							<p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
			</div>
                  </div>
        </div>
</section>

<section class="w3l-covers-18">
        <div class="covers-main editContent">
            <div class="container">
              <div class="main-titles-head ">
                <h3 class="header-name" id="top">Top Travelling Destinations
                </h3>
                <p class="tiltle-para editContent ">Here are our current active Tour Packages for you.</p>
            </div>
			<?php
				require('dbconnect.php');
				$q="select * from packages,mode where packages.mode_id=mode.mode_id";
				$result=mysqli_query($con,$q);
				if (mysqli_num_rows($result)>0) {
				while($row=mysqli_fetch_assoc($result)){
					$pid=$row['package_id'];

					$q3="select * from rate_review where package_id=$pid";
          			$res2=mysqli_query($con,$q3) or die("Worng query");

					$q2="select AVG(rate) AS avg_rate from rate_review where package_id=$pid";
					$res1=mysqli_query($con,$q2);
					$rate=mysqli_fetch_column($res1);
					
					

					$place='';
					$q1="select place from places,place_pack where places.place_id=place_pack.place_id and place_pack.package_id=$pid";
					$res=mysqli_query($con,$q1);
					while ($row1=mysqli_fetch_assoc($res)) {
                    $place=$place.$row1['place'].",";
                }
                

				echo '<div class="container">
            <div class="row">
                <div class="card col-md-12 p-3 mt-4">
                    <div class="row ">
                        <div class="col-md-4">
                            <img alt="product" class="img-responsive " src="../Images/'.$row['upload'].'">
                        </div>
                        <div class="col-md-8">
                            <div class="card-block">
                                <br><h5>'. $row['title'] .'</h5><br>
                                <p class="pos-date"><span class="fa fa-clock-o mr-1"></span>'.$row['no_days'].'</p><p class="pos-date text-right"><span class="fa fa-plane mr-1"></span> Transportation &nbsp: '.$row['mode'].'</p>
								<p class="para">Places we include &nbsp:&nbsp'.rtrim($place,",").'</p> <br>
								<p class="para">'. $row['description'] .'</p><br>
								<h5>$'. $row['cost'] .'</h5><br>';
								if(mysqli_num_rows($res2)>0){
									echo "<h5><i style='color:yellow;' class='fa fa-star'></i> ". rtrim($rate, '.0') ." <span><a href='readmore.php?pid=$pid'><u>Read More</u></a></span></h5><br>";
								}
								if(($row['status'])==1){
                               echo "<a href='booktrip.php?pid=$pid' class='action-button btn mt-lg-5 mt-4'>Book</a>";}
							   else{echo "<h5 style='color:red;'>Not Available</h5>";}
                            echo "</div>
                        </div>
                    </div>
                </div>";
			}
		  }
		  
		  ?> 


         </div>
        </div>
    </section>
<section class="w3l-teams-15">
	<div class="team-single-main editContent">
		<div class="container">

		<div  class="row">
			<div class="column2 col-lg-6">
			
				<img src="assets/images/b1.jpg" alt="product" class="img-responsive ">
			</div>
				<div class="nature-row  coloum4 col-lg-6">
					<h6 class="small-title">Explore</h6>
						<h3>Exclusive World Tour Pack </h3>
					<p class="para editContent text ">
						Coming Soon...</p>
						<a href="about.php" class="action-button btn mt-lg-5 mt-4">Read more</a>
					</div>
				</div>
		</div>
		</div>
	</div>
</section>

<section class="w3l-clients" id="client">
    <div class="call-w3">
        <div class="container text-center">
            <div class="title-head">
            <h3>We are with you at every <br>stage of your journey</h3>
            <a class="btn btn-theme2 mt-lg-5 mt-4" href="#top">Book Your Trip</a>
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
			<p class="copy-footer-29">@aadhi. ©  All rights reserved | Designed by <a href="//w3layouts.com">W3layouts</a></p>
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
