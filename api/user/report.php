<?php
require('dbconnection.php');




$title =  mysqli_real_escape_string($con,$_POST['title']);
$im =  mysqli_real_escape_string($con,$_POST['image']);
$rand =  mysqli_real_escape_string($con,$_POST['pro_id']);
$rep =  mysqli_real_escape_string($con,$_POST['report']);
$des =  mysqli_real_escape_string($con,$_POST['describe']);


 $cre = date("Y-m-d H:i:s");  

 $insert="insert into report(title,image,pro_id,report,describee,date)
 values('$title','$im','$rand','$rep','$des','$cre')";
  $result=mysqli_query($con,$insert);
  if($result){

   



   
  }

 

?>
