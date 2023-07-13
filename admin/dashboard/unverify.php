<?php

header("Access-Control-Allow-Origin: *");

include('../dbconnection.php');


$id = mysqli_real_escape_string($con,$_POST['ID']);



    $insert_team="update  business set status1='waitverification' where ID='$id'";
   
    $run_team=mysqli_query($con,$insert_team);


    if($run_team){

      


    }


?>