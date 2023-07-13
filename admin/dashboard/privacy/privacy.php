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




$de = mysqli_real_escape_string($con,decryp($_POST['de']));



    $insert_team="insert into privacy (descc) 
    values('$de')";
    $run_team=mysqli_query($con,$insert_team);

    if($run_team){



    }


?>