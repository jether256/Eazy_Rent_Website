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



$house_1 = $_FILES['banner']['name'];
$tmp_name1 = $_FILES['banner']['tmp_name'];




$path1 =rand(10000,10000000000);
// $path2 =rand(10000,10000000000);
// $path3 =rand(10000,10000000000);
// $path4 =rand(10000,10000000000);
// $path5 =rand(10000,10000000000);

$final_path1=$path1.$house_1;




    $insert_team="insert into banner (user_id,bizname,title,image,start,end,paid) 
    values('$id','$biz','$tit','$final_path1','$cre','$cre','No')";
    $run_team=mysqli_query($con,$insert_team);


    if($run_team){

       move_uploaded_file($tmp_name1,"bana/$final_path1");
      



    }


?>