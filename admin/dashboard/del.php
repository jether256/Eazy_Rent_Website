<?php

header("Access-Control-Allow-Origin: *");

include('../dbconnection.php');


$id = $_POST['id'];

$select="select * from category where id='$id' ";
$run_select=mysqli_query($con,$select);
$data=mysqli_fetch_array($run_select);

if($data['pic']){
	unlink('../../api/owner/category/'.$data['pic']);
}

$del="delete from category where id = '$id' ";
$run_del=mysqli_query($con,$del);


if($run_del){


}


?>