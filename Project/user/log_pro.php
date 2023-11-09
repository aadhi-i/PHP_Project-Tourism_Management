<?php
    session_start();
    require('dbconnect.php');
    if (!empty($_POST)) {
        $username=$_POST['username'];
        $q="select * from users where username='$username'";
        $rs=mysqli_query($con,$q)or die("Wrong Query");
        $row=mysqli_fetch_assoc($rs);
        if (!empty($row)) {
            if ($_POST['password']!=$row['password']) {
                header("Location:login.php?pwd=1");
            }
            else{
                $_SESSION=array();
                $_SESSION['uid']=$row['uid'];
                if(isset($_GET['log'])){
                    header("Location:index.php");
                }
                elseif(isset($_GET['pid'])){
                    $pid=$_GET['pid'];
                    header("Location:booktrip.php?pid=$pid");
                }
            }
        }
        else{
            header("Location:login.php?usr=1");
        }
    }
?>