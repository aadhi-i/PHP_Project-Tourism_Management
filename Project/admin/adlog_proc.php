<?php
    session_start();
    require('dbconnect.php');
    if (!empty($_POST)) {
        $username=$_POST['username'];
        $q="select * from adminlog where username='$username'";
        $rs=mysqli_query($con,$q)or die("Wrong Query");
        $row=mysqli_fetch_assoc($rs);
        if (!empty($row)) {
            if ($_POST['password']!=$row['password']) {
                header("Location:adlog.php?pwd=1");
            }
            else{
                $_SESSION=array();
                $_SESSION['username']=$row['username'];
                header("Location:adindex.php");
            }
        }
        else{
            header("Location:adlog.php?usr=1");
        }
    }
?>