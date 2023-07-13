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




$id = mysqli_real_escape_string($con,decryp($_POST['user_id']));
$biz = mysqli_real_escape_string($con,decryp($_POST['bizname']));
$tit = mysqli_real_escape_string($con,decryp($_POST['title']));
$cre = date("Y-m-d H:i:s");  
$time=time();



$cat = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$path =rand(10000,10000000000);
$final_path=$path.$cat;



   $insert_team="insert into banner (user_id,bizname,title,image,start,end,paid) 
    values('$id','$biz','$tit','$final_path','$cre','$cre','No')";
    $run_team=mysqli_query($con,$insert_team);


    if($run_team){

       move_uploaded_file($tmp_name,"../../api/owner/businesses/bana/$final_path");
      

    }


?>