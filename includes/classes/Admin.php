<?php
class Admin{

	private $admin;
	private $con;


	public function __construct($admin,$con){
		$this->con=$con;
		$go=mysqli_query($con,"SELECT * FROM admin WHERE email='$admin'");
		$this->admin=mysqli_fetch_array($go);
	}


	public function editProfile($nem,$mail,$num){

		$adm=$this->admin['email'];

		$nem = mysqli_real_escape_string($this->con,$_POST['name']);
		$mail = mysqli_real_escape_string($this->con,$_POST['email']);
		$num = mysqli_real_escape_string($this->con,$_POST['phone']);
		

		$edpro = mysqli_query($this->con, "UPDATE admin SET name='$nem', email='$mail', phone='$num'WHERE email='$adm'");

		if($edpro){


		echo "<span style='color:green;'>Profile Updated</span>";

	        header("Location:adminedit.php");

		}

	}



	public function editPass($pass){

	$mail=$this->admin['email'];

	$pass = mysqli_real_escape_string($this->con,$_POST['pass']);
	$pass=hash('sha512',$pass);


	$up_pass=mysqli_query($this->con,"UPDATE admin SET pass='$pass' WHERE email='$mail'");

	if ($up_pass) {

		echo "<span style='color:green;'>Profile Updated</span>";

	        header("Location:editPass.php");

	}

	}	



}








?>