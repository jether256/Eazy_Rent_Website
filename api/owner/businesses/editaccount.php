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

$uid = mysqli_real_escape_string($con,decryp($_POST['id']));
$nem = mysqli_real_escape_string($con,decryp($_POST['name']));
$mail = mysqli_real_escape_string($con,decryp($_POST['email']));
$num = mysqli_real_escape_string($con,decryp($_POST['phone']));
$pa = mysqli_real_escape_string($con,decryp($_POST['pass']));
$pa=hash('sha512',$pa);



    $insert_team="update  users set name='$nem',email='$mail',phone='$num',password='$pa' where id='$uid'";
   
    $run_team=mysqli_query($con,$insert_team);


    if($run_team){

      


    }


?>