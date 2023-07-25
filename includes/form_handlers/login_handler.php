<?php

if(isset($_POST['submit'])){

$mail = mysqli_real_escape_string($con,$_POST['email']);
$pass = mysqli_real_escape_string($con,$_POST['pass']);
$pass=hash('sha512',$pass);


$user=mysqli_query($con,"SELECT * FROM users WHERE email='$mail' AND password='$pass'");
$count=mysqli_num_rows($user);

if($count==1){

$row=mysqli_fetch_array($user);
$uid=$row['id'];
$type=$row['type'];
$ema=$row['email'];

session_regenerate_id();//avoid session hyjacking
$_SESSION['id'] = $uid;
$_SESSION['type']=$type;
$_SESSION['email']=$ema;
header("Location:index.php");
$success_msg[]='Successfully registered!';
exit();
	

}else{

	$warning_msg[]='Incorrect email or pasword!';

}
 

}

?>