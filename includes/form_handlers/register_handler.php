<?php


if(isset($_POST['submit'])){

 
$nem = mysqli_real_escape_string($con,$_POST['name']);
$mail = mysqli_real_escape_string($con,$_POST['email']);
$num = mysqli_real_escape_string($con,$_POST['phone']);
$pass = mysqli_real_escape_string($con,$_POST['pass']);

$pass=hash('sha512',$pass);
$type= mysqli_real_escape_string($con,$_POST['usertype']);
$time=time();
$da=date("Y-m-d H:i:s");  


$user=mysqli_query($con,"SELECT * FROM users WHERE email='$mail' AND password='$pass'");
$count=mysqli_num_rows($user);

if($count==1){

$warning_msg[]='email already taken!';

}else{

	$insert=mysqli_query($con,"INSERT INTO users VALUES('','$nem','$mail','$pass','0','$num','$time','$da','0','0','0','0','$type','waitverification','$da','0')");

	if($insert){

$success_msg[]='Successfully registered!';

	}else{

$warning_msg[]='Something went wrong!';

	}


}
 

}





?>