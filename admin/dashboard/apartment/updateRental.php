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




$pro = mysqli_real_escape_string($con,decryp($_POST['pro_id']));
$tit = mysqli_real_escape_string($con,decryp($_POST['title']));
$pr = mysqli_real_escape_string($con,decryp($_POST['price']));
$desc = mysqli_real_escape_string($con,decryp($_POST['descc']));
$adu = mysqli_real_escape_string($con,decryp($_POST['adu']));
$place = mysqli_real_escape_string($con,decryp($_POST['place']));
$bed = mysqli_real_escape_string($con,decryp($_POST['bed']));
$bath = mysqli_real_escape_string($con,decryp($_POST['bath']));
$fun = mysqli_real_escape_string($con,decryp($_POST['fun']));
$conn = mysqli_real_escape_string($con,decryp($_POST['con']));
$bs = mysqli_real_escape_string($con,decryp($_POST['bsqft']));
$cs = mysqli_real_escape_string($con,decryp($_POST['csqft']));
$fl = mysqli_real_escape_string($con,decryp($_POST['floors']));
$kit = mysqli_real_escape_string($con,decryp($_POST['kitchen']));
$lon = mysqli_real_escape_string($con,decryp($_POST['lon']));
$lat = mysqli_real_escape_string($con,decryp($_POST['lat']));









    $insert_team="update  house set title='$tit',price='$pr',descc='$desc',adu='$adu',lat='$lat',lon='$lon',place='$place',bed='$bed',bath='$bath',fun='$fun',con='$conn',bsqft='$bs',csqft='$cs',floors='$fl' ,kitchen='$kit' where pro_id='$pro'";
   
    $run_team=mysqli_query($con,$insert_team);


    if($run_team){

      


    }


?>