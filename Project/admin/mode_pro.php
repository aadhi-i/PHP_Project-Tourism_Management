<?php
    session_start();
    require('dbconnect.php');
    if (!empty($_POST)) {
        $mode=$_POST['mode'];
        $q="insert into mode(mode)values('$mode')";
        mysqli_query($con,$q) or die("Wrong Query");
        header("Location:mode.php?ok=1");
    }
    else{
        header("Location:mode.php?yes=1");
    }
?>