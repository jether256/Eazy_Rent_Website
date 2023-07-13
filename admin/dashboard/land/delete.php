<?php

header("Access-Control-Allow-Origin: *");

include('../dbconnection.php');


$id = $_POST['pro_id'];

$select="select * from house where pro_id='$id' ";
$run_select=mysqli_query($con,$select);
$data=mysqli_fetch_array($run_select);

if($data['image1']){
    unlink('../../../api/owner/mage1/'.$data['image1']);
}

else if($data['image2']){
    unlink('../../../api/owner/mage1/'.$data['image2']);
}

else if($data['image3']){
    unlink('../../../api/owner/mage1/'.$data['image3']);
}

else if($data['image4']){
    unlink('../../../api/owner/mage1/'.$data['image4']);
}

else if($data['image5']){
    unlink('../../../api/owner/mage1/'.$data['image5']);
}


$del="delete from house where pro_id = '$id' ";
$run_del=mysqli_query($con,$del);


if($run_del){

    json_encode("yes");


    }else{
    json_encode("no");

    
}


?>