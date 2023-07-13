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




$nem = mysqli_real_escape_string($con,decryp($_POST['name']));


$cat = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$path =rand(10000,10000000000);
$final_path=$path.$cat;



    $insert_team="insert into category (name,pic) 
    values('$nem','$final_path')";
    $run_team=mysqli_query($con,$insert_team);


    if($run_team){

       move_uploaded_file($tmp_name,"../../api/owner/category/$final_path");
      

    }


?>