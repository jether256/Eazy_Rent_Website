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







$nem = mysqli_real_escape_string($con,decryp($_POST['name']));
$mail = mysqli_real_escape_string($con,decryp($_POST['email']));
$num = mysqli_real_escape_string($con,decryp($_POST['phone']));
$ad = mysqli_real_escape_string($con,decryp($_POST['addr']));
$lat = mysqli_real_escape_string($con,decryp($_POST['lat']));
$lon = mysqli_real_escape_string($con,decryp($_POST['lon']));
$pass = mysqli_real_escape_string($con,decryp($_POST['password']));
$pass=hash('sha512',$pass);
$time=time();

$da=date("Y-m-d H:i:s");  
 


$user="select * from users where email='$mail' AND password='$pass' ";
$run_user=mysqli_query($con,$user);
$userData=array();
$count=mysqli_num_rows($run_user);
if($count == "1"){

 echo json_encode("ERROR");

}else{

   $insert="insert into users(name,email,password,pic,phone,last_log,create_date,addr,lat,lon,token,type,status,renew_date,fcmid)
    values('$nem','$mail','$pass','0','$num','$time','$da','$ad','$lat','$lon','0','user','waitverification','$da','0')";
   $res=mysqli_query($con,$insert);
   if($res){

    
      $sql="select * from users where email='$mail' ";
      $query=mysqli_query($con,$sql);
      $data=mysqli_fetch_array($query);
      $userData=$data;

   }

   echo json_encode($userData);

}
?>