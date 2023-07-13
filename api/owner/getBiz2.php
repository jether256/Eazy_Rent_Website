<?php
require('../dbconnection.php');

//$uid = mysqli_real_escape_string($con,$_POST['user_id']);

$list=array();
$po="select * from business where user_id='5'";
$run_posts=mysqli_query($con,$po);

if($run_posts){

        while($row=$run_posts->fetch_assoc()){
            $list[]=$row;

        }

        echo json_encode($list);

}

?>