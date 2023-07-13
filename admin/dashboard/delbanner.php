<?php

header("Access-Control-Allow-Origin: *");

include('../dbconnection.php');


$id = $_POST['id'];

$select="select * from banner where id='$id' ";
$run_select=mysqli_query($con,$select);
$data=mysqli_fetch_array($run_select);

if($data['image']){
	unlink('../../api/owner/businesses/bana/'.$data['image']);
}

$del="delete from banner where id = '$id' ";
$run_del=mysqli_query($con,$del);


if($run_del){


}


?>