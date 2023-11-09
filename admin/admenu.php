<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport"
		content="width=device-width,
				initial-scale=1.0">
	<title>Admin Dashboard</title>
	<link rel="stylesheet"
		href="style.css">
	<link rel="stylesheet"
		href="responsive.css">
    <style>
      h3{
        color:black;
      }
	  a{
		text-decoration:none;
	  }
    </style>
</head>

<body>

	<!-- for header part -->
	<header>

		<div class="logosec">
			<div class="logo">Admin Dashboard</div>
			<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
				class="icn menuicn"
				id="menuicn"
				alt="menu-icon">
		</div>
		<h3>Welcome, <?php echo $_SESSION['username'];?></h3>
			<div class="dp">
			<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png"
					class="dpicn"
					alt="dp">
			</div>
		</div>

	</header>

	<div class="main-container">
		<div class="navcontainer">
			<nav class="nav">
				<div class="nav-upper-options">
					<div class="nav-option option1">
					<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
                            class="nav-img"
                            alt="dashboard">
						<h3 style="color:white;"> Dashboard</h3>
					</div>

					<a href="adindex.php"><div class="option2 hov nav-option">
					<img src=
"https://cdn-icons-png.flaticon.com/128/1946/1946436.png"
                            class="nav-img"
                            alt="home">
							<h3>&nbsp;Home</h3>
					</div></a>

					<a href="adusers.php"><div class="nav-option hov option3">
					<img src=
"https://cdn-icons-png.flaticon.com/128/681/681494.png"
                            class="nav-img"
                            alt="users">
							<h3>&nbsp;Users</h3>
					</div></a>

					<a href="mode.php"><div class="nav-option hov option4">
					<img src=
"https://cdn-icons-png.flaticon.com/128/45/45896.png"
                            class="nav-img"
                            alt="modes">
							<h3>&nbsp;Modes</h3>
					</div></a>

					<a href="place.php"><div class="nav-option hov option5">
					<img src=
"https://cdn-icons-png.flaticon.com/128/535/535188.png"
                            class="nav-img"
                            alt="places">
							<h3>&nbsp;Places</h3>
					</div></a>

					<a href="adpkg.php"><div class="nav-option hov option6">
					<img src=
"https://cdn-icons-png.flaticon.com/128/1154/1154571.png"
                            class="nav-img"
                            alt="packages">
							<h3>&nbsp;Packages</h3>
					</div></a>

					<a href="bookings.php"><div class="nav-option hov option7">
					<img src=
"https://cdn-icons-png.flaticon.com/128/7322/7322293.png"
                            class="nav-img"
                            alt="bookings">
							<h3>&nbsp;Bookings</h3>
					</div></a>

                    <a href="review.php"><div class="nav-option hov option8">
					<img src=
"https://cdn-icons-png.flaticon.com/128/8013/8013078.png"
                            class="nav-img"
                            alt="reviews">
							<h3>&nbsp;Reviews</h3>
					</div></a>

					<a href="adlogout.php?logout='1'"><div class="nav-option hov option9">
					<img src=
"https://cdn-icons-png.flaticon.com/128/4436/4436954.png"
                            class="nav-img"
                            alt="logout">
							<h3>&nbsp;Log Out</h3>
					</div></a>

				</div>
			</nav>
		</div>
	<script src="./index.js"></script>
</body>
</html>


