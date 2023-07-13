<?php

header("Access-Control-Allow-Origin: *");

include('../dbconnection.php');


$id = mysqli_real_escape_string($con,$_POST['ID']);



    $insert_team="update  business set status1='verified' where ID='$id'";
   
    $run_team=mysqli_query($con,$insert_team);


    if($run_team){

      


    }


?>