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




$de = mysqli_real_escape_string($con,decryp($_POST['desc']));

  $cre = date("Y-m-d H:i:s");  

// $time=time();



// $house_1 = $_FILES['photo']['name'];
// $tmp_name1 = $_FILES['photo']['tmp_name'];

// $house_2 = $_FILES['photoo']['name'];
// $tmp_name2 = $_FILES['photoo']['tmp_name'];

// $house_3 = $_FILES['photooo']['name'];
// $tmp_name3 = $_FILES['photooo']['tmp_name'];

// $house_4 = $_FILES['photoooo']['name'];
// $tmp_name4 = $_FILES['photoooo']['tmp_name'];

$house_5= $_FILES['photooooo']['name'];
$tmp_name5 = $_FILES['photooooo']['tmp_name'];


$path1 =rand(10000,10000000000);
// $path2 =rand(10000,10000000000);
// $path3 =rand(10000,10000000000);
// $path4 =rand(10000,10000000000);
// $path5 =rand(10000,10000000000);

// $final_path1=$path1.$house_1;
// $final_path2=$path1.$house_2;
// $final_path3=$path1.$house_3;
// $final_path4=$path1.$house_4;
$final_path5=$path1.$house_5;



    $insert_team="insert into blog (de,im,date) 
    values('$de','$final_path5','$cre')";
    $run_team=mysqli_query($con,$insert_team);


    if($run_team){

  
       move_uploaded_file($tmp_name5,"blo/$final_path5");



    }


?>