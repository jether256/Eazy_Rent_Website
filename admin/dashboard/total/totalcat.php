<?php

header("Access-Control-Allow-Origin: *");


include('../dbconnection.php');





$user="SELECT id from category";
$run_user=mysqli_query($con,$user);
$totalvalue=mysqli_num_rows($run_user);
$count=mysqli_num_rows($run_user);

echo json_encode($totalvalue);

?>