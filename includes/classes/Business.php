<?php

class Business{

	private $con;
	private $user_obj;

	public function __construct($con,$user){
		$this->con=$con;
		$this->user_obj= new User($con,$user);
	}




	public function registerBusiness($nem,$phon,$mail,$tax,$tin,$add,$im1,$im2){

		$uid=$this->user_obj->getUID();
		$nem = mysqli_real_escape_string($this->con, $nem);
		$phon= mysqli_real_escape_string($this->con, $phon);
		$mail = mysqli_real_escape_string($this->con, $mail);
		$tax = mysqli_real_escape_string($this->con, $tax);
		$tin = mysqli_real_escape_string($this->con, $tin);
		$add = mysqli_real_escape_string($this->con, $add);

		 $cre = date("Y-m-d H:i:s");  
		$time=time();

			//temp or im1
			//$im1=$_FILES['photo']['name'];
			$tmp_name1 = $_FILES['photo']['tmp_name'];

			//temp or 1m2
			//$im2=$_FILES['photoo']['name'];
			$tmp_name2 = $_FILES['photoo']['tmp_name'];

			$path1 =rand(10000,10000000000);
			

			$final_path1=$path1.$im1;
			$final_path2=$path1.$im2;
		

		$reg_biz=mysqli_query($this->con,"SELECT * FROM business WHERE user_id='$uid'");
		$re_count=mysqli_num_rows($reg_biz);
		if($re_count==1){

			$warning_msg[]='Business is already Registered';
			header("Location:index.php");
       
		}else{

			$reg_in=mysqli_query($this->con,"INSERT INTO business VALUES('','$uid','$final_path1','$final_path2','$nem','$phon','$mail','$tax','$tin','$add','0','0','$time','waitverification','All','yes','0.00','0','yes','$cre','0','0','0','$cre','$cre','No')");

			if($reg_in){

			move_uploaded_file($tmp_name1,"api/owner/logo/$final_path1");
	       move_uploaded_file($tmp_name2,"api/owner/shop/$final_path2");

	       $success_msg[]='Business Registered!';
			//header("Location:index.php");
       
			}
		}
	}



	public function getBuisnesUID(){
		$uid=$this->user_obj->getUID();
		$owner_query=mysqli_query($this->con,"SELECT user_id FROM business where user_id='$uid'");
		$owner=mysqli_fetch_array($owner_query);
		return $owner['user_id'];
	}


	public function getBusinessName(){
		$uid=$this->user_obj->getUID();
		$owner_query=mysqli_query($this->con,"SELECT bizname FROM business where user_id='$uid'");
		$owner=mysqli_fetch_array($owner_query);
		return $owner['bizname'];
	}



	public function getBusinessPhone(){
		$uid=$this->user_obj->getUID();
		$owner_query=mysqli_query($this->con,"SELECT phone1 FROM business where user_id='$uid'");
		$owner=mysqli_fetch_array($owner_query);
		return $owner['phone1'];
	}



	public function getBusinessEmail(){
		$uid=$this->user_obj->getUID();
		$owner_query=mysqli_query($this->con,"SELECT email1 FROM business where user_id='$uid'");
		$owner=mysqli_fetch_array($owner_query);
		return $owner['email1'];
	}


}



?>