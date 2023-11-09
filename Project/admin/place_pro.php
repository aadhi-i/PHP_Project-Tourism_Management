<?php
    session_start();
    require('dbconnect.php');
    if (!empty($_POST)) {
        $place=$_POST['place'];
        $q="insert into places(place)values('$place')";
        mysqli_query($con,$q) or die("Wrong Query");
        header("Location:place.php?ok=1");
    }
    else{
        header("Location:place.php?yes=1");
    }
?>