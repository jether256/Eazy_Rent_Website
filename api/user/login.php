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





$mail = mysqli_real_escape_string($con,decryp($_POST['email']));
$pass = mysqli_real_escape_string($con,decryp($_POST['password']));
$pass=hash('sha512',$pass);
$time=time();


$user="select * from users where  email='$mail' AND password='$pass' ";
$run_user=mysqli_query($con,$user);
$userData=array();
$count=mysqli_num_rows($run_user);
if($count == "1"){

 
	 $insert="update users set last_log= '$time' where email='$mail'AND password='$pass' ";
	 $res=mysqli_query($con,$insert);
	 if($res){

	 	
	 	  $sql="select * from users where email='$mail' ";
			$query=mysqli_query($con,$sql);
			$data=mysqli_fetch_array($query);
			$userData=$data;

	 }

	 echo json_encode($userData);

}else{

	 echo json_encode("ERROR");

}


?>