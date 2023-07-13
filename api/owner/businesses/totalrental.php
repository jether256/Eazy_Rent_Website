<?php

header("Access-Control-Allow-Origin: *");


include('dbconnection.php');






$uid = mysqli_real_escape_string($con,$_POST['user_id']);


$user="SELECT ID from house  WHERE user_id ='$uid' ORDER BY ID";
$run_user=mysqli_query($con,$user);
$totalvalue=mysqli_num_rows($run_user);
$count=mysqli_num_rows($run_user);

echo json_encode($totalvalue);

?>