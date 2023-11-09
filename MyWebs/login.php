<?php include('server.php')?>
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
<header>
<h2 class="fw-bolder bg-dark text-white" style="font-family: Roboto">GOAT<sub style="font-size: 15px;">A Trip Advisor Company</sub></h2></div>

</header>
<div class="text-center text-white ">
<form method="post" action="login.php" style="width: 300px;margin: auto;">
<?php include('errors.php')?>
    <img class="mt-4 mb-4" src="https://static.vecteezy.com/system/resources/previews/008/361/462/original/illustration-goat-head-on-black-background-free-vector.jpg" height="160" alt="">
    <h1 class="h3 mb-3">Sign In</h1>
    <div class="form-floating mb-3 text-primary">
    <input type="text" class="form-control" id="floatingInput" name="username" placeholder="Username" required autofocus>
    <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating mt-2 text-primary">
    <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
    <label for="floatingPassword">Password</label>
    </div>
    <div class="mt-3">
        <button class="btn btn-lg btn-primary btn-block" name="login_user">Sign In</button>
    </div>
    <br><p>Not Signed Up Yet?</p>
    <div class="mt-3"><a href="register.php"><p>Sign Up</p></a>
    </div>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>   
</body>
</html>