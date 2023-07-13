<?php


header("Access-Control-Allow-Origin: *");

require('dbconnection.php');



$de = mysqli_real_escape_string($con,$_POST['user_id']);

$list=array();
$po="select * from banner where user_id=''";
$run_posts=mysqli_query($con,$po);

if($run_posts){

        while($row=$run_posts->fetch_assoc()){
            $list[]=$row;

        }

        echo json_encode($list);

}

?>