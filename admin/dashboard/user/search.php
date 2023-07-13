<?php
require('dbconnection.php');


$search=mysqli_real_escape_string($con,$_POST['search']);

$list=array();
$po="SELECT * FROM adverts WHERE type LIKE '%$search%' OR year LIKE '%$search%' OR price LIKE '%$search%' OR trans LIKE '%$search%' OR title LIKE '%$search%' OR crip LIKE '%$search%'
 OR adu LIKE '%$search%' OR ad LIKE '%$search%' OR brand LIKE '%$search%'";
$chato=mysqli_query($con,$po);

if($chato){

        while($row=$chato->fetch_assoc()){
            $list[]=$row;

        }

        echo json_encode($list);

}


?>