<?php
include('../dbconnection.php');

$id = $_POST['id'];
$ad = $_POST['addr'];
$lon = $_POST['lon'];
$lat = $_POST['lat'];





$lo="update users set addr='$ad',lat='$lat' ,lon='$lon' where id = '$id' ";

$run_location=mysqli_query($con,$lo);

if($run_location){


   
    json_encode("yeah");

    }else{
         json_encode("no");

    }




?>