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
$own = mysqli_real_escape_string($con,decryp($_POST['owner']));
$phon = mysqli_real_escape_string($con,decryp($_POST['phone']));
$biz = mysqli_real_escape_string($con,decryp($_POST['bizname']));
$num = mysqli_real_escape_string($con,decryp($_POST['num']));
$mail = mysqli_real_escape_string($con,decryp($_POST['mail']));


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


 $cre = date("Y-m-d H:i:s");  


$time=time();



$house_1 = $_FILES['photo']['name'];
$tmp_name1 = $_FILES['photo']['tmp_name'];

$house_2 = $_FILES['photoo']['name'];
$tmp_name2 = $_FILES['photoo']['tmp_name'];

$house_3 = $_FILES['photooo']['name'];
$tmp_name3 = $_FILES['photooo']['tmp_name'];

$house_4 = $_FILES['photoooo']['name'];
$tmp_name4 = $_FILES['photoooo']['tmp_name'];

$house_5= $_FILES['photooooo']['name'];
$tmp_name5 = $_FILES['photooooo']['tmp_name'];


$path1 =rand(10000,10000000000);
// $path2 =rand(10000,10000000000);
// $path3 =rand(10000,10000000000);
// $path4 =rand(10000,10000000000);
// $path5 =rand(10000,10000000000);

$final_path1=$path1.$house_1;
$final_path2=$path1.$house_2;
$final_path3=$path1.$house_3;
$final_path4=$path1.$house_4;
$final_path5=$path1.$house_5;



    $insert_team="insert into house (user_id,owner,phone,bizname,num,mail,image1,image2,image3,image4,image5,title,price,descc,adu,lat,lon,place,bed,bath,fun,con,bsqft,csqft,floors,kitchen,paid,start,end,blocked,type,pro_id) 
    values('$id','$own','$phon','$biz','$num','$mail','$final_path1','$final_path2','$final_path3','$final_path4','$final_path5','$tit','$pr','$desc','$adu','$lat','$lon','$place','$bed','$bath','$fun','$conn','$bs','$cs','$fl','$kit','No','$cre','$cre','No','Rentals','$path1')";
    $run_team=mysqli_query($con,$insert_team);


    if($run_team){

       move_uploaded_file($tmp_name1,"mage1/$final_path1");
       move_uploaded_file($tmp_name2,"mage2/$final_path2");
       move_uploaded_file($tmp_name3,"mage3/$final_path3");
       move_uploaded_file($tmp_name4,"mage4/$final_path4");
       move_uploaded_file($tmp_name5,"mage5/$final_path5");




    }


?>