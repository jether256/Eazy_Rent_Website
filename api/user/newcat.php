<?php


header("Access-Control-Allow-Origin: *");

require('../dbconnection.php');

$nem=mysqli_real_escape_string($con,$_POST['name']);


$list=array();
$po="select * from house where type = '$nem' ORDER BY ID DESC";
$run_posts=mysqli_query($con,$po);

if($run_posts){

        while($row=$run_posts->fetch_assoc()){
            $list[]=$row;

        }

        echo json_encode($list);

}

?>