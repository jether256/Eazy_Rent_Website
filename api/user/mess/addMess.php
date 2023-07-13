<?php

header("Access-Control-Allow-Origin: *");

include('../dbconnection.php');


const key='MySecretKeyForEncryptionAndDecry';
const iv='helloworldhellow';
const method='aes-256-cbc';


function encryp($text){
    return openssl_encrypt($text, method, key, 0, iv);
}


function decryp($text){
    return openssl_decrypt($text, method, key, 0, iv);
}




$rumid = mysqli_real_escape_string($con,decryp($_POST['chatRoomId']));
$chat = mysqli_real_escape_string($con,decryp($_POST['chat']));
$sel = mysqli_real_escape_string($con,decryp($_POST['selname']));
$use = mysqli_real_escape_string($con,decryp($_POST['usename']));
$selid = mysqli_real_escape_string($con,decryp($_POST['selID']));
$uid = mysqli_real_escape_string($con,decryp($_POST['useid']));
$proid = mysqli_real_escape_string($con,decryp($_POST['product_id']));
$tm = mysqli_real_escape_string($con,$_POST['time']);
$im = mysqli_real_escape_string($con,decryp($_POST['image']));


  $cre = date("Y-m-d H:i:s");  


// $time=time();



    $insert_team="insert into mess (chatRoomID,ownID,userID,user,seller,mess,pro_id,seen,noti,wen,type,image) 
    values('$rumid','$selid','$uid','$use','$sel','$chat','$proid','$tm','0','$cre','user','$im')";
    $run_team=mysqli_query($con,$insert_team);


    if($run_team){

     

    }


?>