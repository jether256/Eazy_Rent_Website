<?php
include('../dbconnection.php');

$id = $_POST['user_id'];
$nem = $_POST['name'];
$mail = $_POST['email'];
$fon = $_POST['phone'];





$lo="update users set name='$nem',email='$mail' ,phone='$fon' where id = '$id' ";

$run_location=mysqli_query($con,$lo);

if($run_location){


}



?>