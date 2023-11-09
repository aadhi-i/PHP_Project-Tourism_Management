<?php
    $con=new mysqli('localhost','root','','db_tour');
    if ($con->connect_error) {
        die("Failed".$con->connect_error);
    }
    //echo "done";
?>