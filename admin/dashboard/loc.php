<?php


header("Access-Control-Allow-Origin: *");

require('dbconnection.php');



$list=array();
$po="select * from business where user_id='1'";
$run_posts=mysqli_query($con,$po);

if($run_posts){

        while($row=$run_posts->fetch_assoc()){
            $list[]=$row;

        }

        echo json_encode($list);

}

?>