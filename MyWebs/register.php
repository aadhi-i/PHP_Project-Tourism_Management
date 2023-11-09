<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOATLogin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            background: black;
        }
    </style>
</head>
<body>
<div class="text-center text-white ">
  <form method="post" action="register.php" style="width: 300px;margin: auto;">
  	<?php include('errors.php'); ?>
	  <img class="mt-4 mb-4" src="https://static.vecteezy.com/system/resources/previews/008/361/462/original/illustration-goat-head-on-black-background-free-vector.jpg" height="140" alt="">
    <h1 class="h3 mb-3">Sign Up</h1>
	<div class="form-floating mb-3 text-primary">
    <input type="text" class="form-control" id="floatingInput" name="username" placeholder="Username" value="<?php echo $username; ?>" required autofocus>
    <label for="floatingInput">Username</label>
  	</div>
  	<div class="form-floating mb-3 text-primary">
    <input type="email" class="form-control" id="floatingInput" name="email" placeholder="sample@gmail.com" value="<?php echo $email; ?>">
    <label for="floatingInput">Email</label>
  	</div>
  	<div class="form-floating mt-2 text-primary">
    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password_1">
    <label for="floatingPassword">Password</label>
    </div>
	<div class="form-floating mt-2 text-primary">
    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password_2">
    <label for="floatingPassword">Confirm Password</label>
    </div>
	<div class="mt-3">
        <button class="btn btn-lg btn-primary btn-block" name="reg_user">Sign Up</button>
    </div>
	<br><p>Already Signed Up?</p>
	<div class="mt-1"><a href="login.php"><p>Sign In</p></a>
    </div>
  </form>
	</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>