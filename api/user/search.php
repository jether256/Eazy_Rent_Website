<?php

header("Access-Control-Allow-Origin: *");
require('dbconnection.php');


$search=mysqli_real_escape_string($con,$_POST['search']);

$list=array();
$po="SELECT * FROM house WHERE pro_id LIKE '%$search%' OR type LIKE '%$search%' OR price LIKE '%$search%' OR place LIKE '%$search%' OR title LIKE '%$search%' OR descc LIKE '%$search%'
 OR adu LIKE '%$search%' OR bizname LIKE '%$search%' OR owner LIKE '%$search%'";
$chato=mysqli_query($con,$po);

if($chato){

        while($row=$chato->fetch_assoc()){
            $list[]=$row;

        }

        echo json_encode($list);

}


?>