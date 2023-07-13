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




$pr = mysqli_real_escape_string($con,decryp($_POST['price']));
$se = mysqli_real_escape_string($con,decryp($_POST['serv']));
$de = mysqli_real_escape_string($con,decryp($_POST['descc']));  

// $time=time();



$house_1 = $_FILES['photo']['name'];
$tmp_name1 = $_FILES['photo']['tmp_name'];


$path1 =rand(10000,10000000000);
// $path2 =rand(10000,10000000000);
// $path3 =rand(10000,10000000000);
// $path4 =rand(10000,10000000000);
// $path5 =rand(10000,10000000000);

// $final_path1=$path1.$house_1;
// $final_path2=$path1.$house_2;
// $final_path3=$path1.$house_3;
// $final_path4=$path1.$house_4;
$final_path1=$path1.$house_1;



    $insert_team="insert into service (service,descc,price,im) 
    values('$se','$de','$pr','$final_path1')";
    $run_team=mysqli_query($con,$insert_team);


    if($run_team){

  
       move_uploaded_file($tmp_name1,"serve/$final_path1");



    }


?>