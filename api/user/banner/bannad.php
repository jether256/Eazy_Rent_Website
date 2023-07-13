<?php

header("Access-Control-Allow-Origin: *");

require('../dbconnection.php');

$uid = $_POST['uid'];

$list=array();
$po="select * from house where user_id='$uid'";
$run_posts=mysqli_query($con,$po);

if($run_posts){

        while($row=$run_posts->fetch_assoc()){
            $list[]=$row;

        }

        echo json_encode($list);

}

?>