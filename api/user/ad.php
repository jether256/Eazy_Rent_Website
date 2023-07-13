<?php
require('../dbconnection.php');

$uid = $_POST['id'];

$list=array();
$po="select * from users where id='$uid'";
$run_posts=mysqli_query($con,$po);

if($run_posts){

        while($row=$run_posts->fetch_assoc()){
            $list[]=$row;

        }

        echo json_encode($list);

}

?>