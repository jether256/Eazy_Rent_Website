<?php
header("Access-Control-Allow-Origin: *");

include('../dbconnection.php');

const key='MySecretKeyForEncryptionAndDecry';
const iv='helloworldhellow';
const method='aes-256-cbc';


// function encryp($text){
//     return openssl_encrypt($text, method, key, 0, iv);
// }


// function decryp($text){
//     return openssl_decrypt($text, method, key, 0, iv);
// }







//  $uid = mysqli_real_escape_string($con,decryp($_POST['uid']));



$list=array();
$po="select * from mess ";
$run_posts=mysqli_query($con,$po);

if($run_posts){

        while($row=$run_posts->fetch_assoc()){
            $list[]=$row;

        }

        echo json_encode($list);

}

?>