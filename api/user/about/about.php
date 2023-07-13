<?php


header("Access-Control-Allow-Origin: *");

require('../dbconnection.php');

//$uid=mysqli_real_escape_string($con,$_POST['id']);


$list=array();
$po="select * from about";
$run_posts=mysqli_query($con,$po);

if($run_posts){

        while($row=$run_posts->fetch_assoc()){
            $list[]=$row;

        }

        echo json_encode($list);

}

?>