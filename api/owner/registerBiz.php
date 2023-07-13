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
$phon = mysqli_real_escape_string($con,decryp($_POST['phone']));
$mail = mysqli_real_escape_string($con,decryp($_POST['email']));
$tax = mysqli_real_escape_string($con,decryp($_POST['taxRegistered']));
$tin = mysqli_real_escape_string($con,decryp($_POST['tinNumber']));
$ad = mysqli_real_escape_string($con,decryp($_POST['address']));
$lat = mysqli_real_escape_string($con,decryp($_POST['lat']));
$lon = mysqli_real_escape_string($con,decryp($_POST['lon']));
$sek = mysqli_real_escape_string($con,decryp($_POST['service']));
 $cre = date("Y-m-d H:i:s");  


$time=time();

$logo_image = $_FILES['logo']['name'];
$tmp_name = $_FILES['logo']['tmp_name'];

$shop_image = $_FILES['shop']['name'];
$tmp_name1 = $_FILES['shop']['tmp_name'];

$path =rand(10000,10000000000);
$path1 =rand(10000,10000000000);
$final_path=$path.$logo_image;
$final_path1=$path1.$shop_image;
 


$user="select * from business where bizname='$biz' AND email1='$mail' ";
$run_user=mysqli_query($con,$user);
$userData=array();
$count=mysqli_num_rows($run_user);
if($count == "1"){

 echo json_encode("ERROR");

}else{

   
    $insert="insert into business (user_id,logo,shopImage,bizname,phone1,email1,taxRegistered,tinNumber,address,lon,lat,time1,status1,service,shopOpen,rating,totalRating,isTopPicked,create_t,paid,online,cod,end,renew,blocked) 
    values(
    '$id','$final_path','$final_path1','$biz','$phon','$mail','$tax','$tin','$ad','$lon','$lat','$time',
    'waitverification','$sek','yes','0.00','0','yes','$cre','0','0','0','$cre','$cre','No')";
   $res=mysqli_query($con,$insert);
   if($res){
       
       
        move_uploaded_file($tmp_name,"logo/$final_path");
        move_uploaded_file($tmp_name1,"shop/$final_path1");

    
      $sql="select * from business where bizname='$biz' ";
      $query=mysqli_query($con,$sql);
      $data=mysqli_fetch_array($query);
      $userData=$data;

   }

   echo json_encode($userData);

}
?>
