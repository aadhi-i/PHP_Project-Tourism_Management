<?php
    session_start();
    require('dbconnect.php');
    if (!empty($_POST)) {
        $uname=$_POST['name'];
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $pincode=$_POST['pincode'];
                     

          // first check the database to make sure 
            // a user does not already exist with the same username and/or email
            $user_check_query= "select * from users where username='$username' or email='$email'";
            $rs=mysqli_query($con,$user_check_query)or die("Wrong Query");
            $row=mysqli_fetch_assoc($rs);
            if (!empty($row)) {
                if ($username==$row['username']) {
                    header("Location:register.php?usr=1");
                }
                if ($email==$row['email']) {
                    header("Location:register.php?em=1");
                }
        }else{
            $q="insert into users(uname,username,password,email,pincode)values('$uname','$username','$password','$email','$pincode')";
            mysqli_query($con,$q) or die("Wrong Query");
            $_SESSION=array();
            $_SESSION['uid']=mysqli_insert_id($con); 
            if(isset($_GET['log'])){
                header("Location:index.php");
            }
            if(isset($_GET['pid'])){
                $pid=$_GET['pid'];
                header("Location:booktrip.php?pid=$pid");
            }
        }
    }
?>