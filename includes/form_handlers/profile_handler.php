<?php


if(isset($_POST['submit'])){

$userLoggedIn;
$nem = mysqli_real_escape_string($con,$_POST['name']);
$mail = mysqli_real_escape_string($con,$_POST['email']);
$num = mysqli_real_escape_string($con,$_POST['phone']);
$pass = mysqli_real_escape_string($con,$_POST['pass']);
$pass=hash('sha512',$pass);



$user=mysqli_query($con,"UPDATE users SET name='$nem',email='$mail',password='$pass' , phone='$num' WHERE id='$userLoggedIn'");

if($user){

$warning_msg[]='Profile updated!';

}else{

$warning_msg[]='Something went wrong!';

}


}
 







?>