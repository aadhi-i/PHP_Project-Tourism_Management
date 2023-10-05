<?php
    session_start();
    require('dbconnect.php');
    if (!empty($_POST)) {
        $title=$_POST['title'];
        $cost=$_POST['cost'];
        $desc=$_POST['desc'];
        $mode=$_POST['mode'];
        $upload=$_POST['upload'];
        $no_days=$_POST['no_days'];
        $q="insert into packages(title,cost,description,mode_id,upload,no_days)values('$title','$cost','$desc','$mode','$upload','$no_days')";
        mysqli_query($con,$q) or die("Wrong Query");

        $package_id=mysqli_insert_id($con);
        $place_ids=$_POST['place'];
        foreach ($place_ids as $place_id) {
            if (isset($place_id)) {
                $q2="insert into place_pack(place_id,package_id)values('$place_id','$package_id')";
                mysqli_query($con,$q2) or die("Wrong Query");
            }
        }
        
        header("Location:adpkg.php");
    }
    else
    {
        header("Location:package.php");

    }
?>