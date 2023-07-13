<?php


class User{

	private $con;
	private $user;


	public function __construct($con,$user){
		$this->con=$con;
		$user_details_query =mysqli_query($con,"SELECT * FROM users WHERE id='$user'");
		$this->user=mysqli_fetch_array($user_details_query);
	}


	public function getUid() {
		return $this->user['id'];
	}

	public function getUsername(){

		return $this->user['name'];
	}

	public function updateUser($nem,$mail,$num,$pass){

		$id=$this->user['id'];
		$nem = mysqli_real_escape_string($this->con,$_POST['name']);
		$mail = mysqli_real_escape_string($this->con,$_POST['email']);
		$num = mysqli_real_escape_string($this->con,$_POST['phone']);
		$pass = mysqli_real_escape_string($this->con,$_POST['pass']);
		$pass=hash('sha512',$pass);

		$up=mysqli_query($this->con,"UPDATE users SET name='$nem',email='$mail',password='$pass',phone='$num' WHERE id='$id'");

		if($up){
 			$success_msg[]='Profile updated!';
			//header("Location:index.php");
		}

	}






}














?>