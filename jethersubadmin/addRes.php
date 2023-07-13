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





$house_1 = $_FILES['photo']['name'];
$tmp_name1 = $_FILES['photo']['tmp_name'];




$path1 =rand(10000,10000000000);
// $path2 =rand(10000,10000000000);
// $path3 =rand(10000,10000000000);
// $path4 =rand(10000,10000000000);
// $path5 =rand(10000,10000000000);

 $final_path1=$path1.$house_1;




    $insert_team="insert into resume (res) 
    values('$final_path1')";
    $run_team=mysqli_query($con,$insert_team);


    if($run_team){

  
       move_uploaded_file($tmp_name1,"res/$final_path1");



    }


?>