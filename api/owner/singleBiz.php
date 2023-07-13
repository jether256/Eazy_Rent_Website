<?php

header("Access-Control-Allow-Origin: *");

include('dbconnection.php');



const key='MySecretKeyForEncryptionAndDecry';
const iv='helloworldhellow';
const method='aes-256-cbc';


function encryp($text){
    return openssl_encrypt($text, method, key, 0, iv);
}


function decryp($text){
    return openssl_decrypt($text, method, key, 0, iv);
}



$uid = mysqli_real_escape_string($con,decryp($_POST['user_id']));

$user="select * from business where  user_id='$uid'";
$run_user=mysqli_query($con,$user);
$userData=array();
$count=mysqli_num_rows($run_user);
if($count == "1"){

 
$sql="select * from business where user_id='$uid' ";
$query=mysqli_query($con,$sql);
$data=mysqli_fetch_array($query);
$userData=$data;	
	 	  

	 echo json_encode($userData);

}else{

	 echo json_encode("ERROR");

}


?>