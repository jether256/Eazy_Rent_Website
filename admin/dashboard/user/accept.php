<?php

header("Access-Control-Allow-Origin: *");

include('../dbconnection.php');


$id = mysqli_real_escape_string($con,$_POST['ID']);



    $insert_team="update  users set status='verified' where id='$id'";
   
    $run_team=mysqli_query($con,$insert_team);


    if($run_team){

      


    }


?>