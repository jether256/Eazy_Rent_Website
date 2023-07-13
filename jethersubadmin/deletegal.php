<?php

header("Access-Control-Allow-Origin: *");

include('dbconnection.php');


$id = $_POST['ID'];

$select="select * from gallery where ID='$id' ";
$run_select=mysqli_query($con,$select);
$data=mysqli_fetch_array($run_select);

if($data['im1']){
    unlink('gala/'.$data['im1']);
}

else if($data['im2']){
    unlink('gala/'.$data['im2']);
}

else if($data['im3']){
    unlink('gala/'.$data['im3']);
}

else if($data['im4']){
    unlink('gala/'.$data['im4']);
}

else if($data['im5']){
    unlink('gala/'.$data['im5']);
}

$del="delete from gallery where ID = '$id' ";
$run_del=mysqli_query($con,$del);


if($run_del){



    
}


?>