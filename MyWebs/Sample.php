<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GOAT</title>
    <link rel="icon" href="https://www.freepnglogos.com/uploads/goat-png/goat-leesport-farmers-market-flea-market-craft-fairs-8.png" type="image/gif" sizes="16x16">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            background: black;
        }
        #p1{
          font-size: 40px;
        }
        #p2{
          font-size: 20px;
        }
    </style>  
</head>
  <body>
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
  <header class="bg-dark">
      <div class="row text-white">
        <div class="col-md-6 col-9 p-2 ps-5">
            <h2 class="fw-bolder" style="font-family: Roboto">GOAT<sub style="font-size: 15px;">A Trip Advisor Company</sub></h2></div>
        <div class="col-md-6 col-3  my-auto bg-dark">
           <nav class="navbar navbar-expand-lg">
           <div class="container-fluid">    
    <button class="navbar-toggler text-white ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item active">
          <a class="nav-link text-white" aria-current="page" href="Sample.php">Home</a>
        </li>
        <li class="nav-item dropdown" data-bs-theme="dark">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Packages
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="basicalc.php">Base Packages</a></li>
            <li><a class="dropdown-item" href="#">Premium Packages</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Contact Us</a>
        </li>
        <li class="nav-item">
          <aclass="nav-link" href="#">
        <a href="login.php?logout='1'"><button class="btn btn-md ms-3 btn-outline-danger btn-block" name="login_user">Log Out</button></a></a>
        </li>
      </ul>
    </div>
  </div>
        </nav>
        </div>
      </div>
  </header>
  <section>
    <div class="text-left text-white ps-5 mt-3">
  <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Hi <strong><?php echo $_SESSION['username']; ?></strong>, Welcome to <strong>GOAT</strong></p>
  </div>
    <div class="text-center">
    <img class="mt-4 mb-4" src="https://static.vecteezy.com/system/resources/previews/008/361/462/original/illustration-goat-head-on-black-background-free-vector.jpg" height="150" alt="">
    </div>
  </section>
  <section>
    <div class="container">
    <div class="row">
      <div class="col-md-4 m-5">
            <div class="card mb-5" style="width: 30rem;margin: auto;">
          <img src="https://sandpebblestours.com/wp-content/uploads/2018/06/all-India-Tour.jpg" class="card-img-top" alt="...">
          <div class="card-body bg-dark">
            <p class="card-text text-success fw-bolder">All India Trip Booking Starded!!</p>
            <a href="#" class="btn btn-md btn-primary">Book Now</a>
          </div>
  </div>
</div>
    <div class="col-md-4 text-white m-5"><h2>Enjoy your trip to the Fullest...</h2>
    <div class="card mt-5 bg-dark text-white">
  <div class="card-header">
    <h4>Why book with GOAT?</h4>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>Quality at Our Core.</p>
    </blockquote>
  </div>
</div> 
  </div>
</div>
</div>
  </section>
 <section>
  <div class="container">
    <div class="row text-white">
      <div class="col-md-4 m-3">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        </div>
      </div>
      <div class="col-md-4 m-3">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        </div>
      </div>
    </div>
  </div>
 </section>
  <?php endif ?>
  <?php endif ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>