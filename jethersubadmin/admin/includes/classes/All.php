<?php

class All{

	private $con;


	public function __construct($con){
		$this->con=$con;
	}





//get businesses
	public function getBiz(){

		$bu = "";
		$query=mysqli_query($this->con,"SELECT * FROM business");
			$i = 0;
		while ($row=mysqli_fetch_array($query)) {
			$id=$row['ID'];
			$uid=$row['user_id'];
			$logo=$row['logo'];
			$shop=$row['shopImage'];
			$biz=$row['bizname'];
			$fon=$row['phone1'];
			$mail=$row['email1'];
			$tax=$row['taxRegistered'];
			$tin=$row['tinNumber'];
			$ad=$row['address'];
			$lon=$row['lon'];
			$lat=$row['lat'];
			$tim=$row['time1'];
			$stat=$row['status1'];
			$serv=$row['service'];
			$open=$row['shopOpen'];
			$ratin=$row['rating'];
			$totoR=$row['totalRating'];
			$top=$row['isTopPicked'];
			$cre=$row['create_t'];
			$paid=$row['paid'];
			$online=$row['online'];
			$con=$row['cod'];
			$end=$row['end'];
			$renew=$row['renew'];
			$blo=$row['blocked'];
			
			$i++;


			$bu .= "

				<tr>
                    
                <td>$i</td>
                 <td><img src='../../api/owner/logo/$logo' alt='' style='width:40px;height:40px'></td>
              <td>$biz</td>       
              <td>$fon</td>
             <td>$ad</td>
              
              	
				<td>
				<a href='verifyBiz.php?bizid=$id' class='btn btn-outline-success'>Verify</a>
				</td>
              	
              <td><a href='view_more.php?bizid=$id' class='btn btn-outline-success'>View More</a></td>
              <td><a href='addBana.php?bizid=$id' class='btn btn-outline-success'>Add Banner</a></td>
                
            </tr>
			";

			

			
			// code...
		}


		return $bu;

	}

//ver business
public function verBiz($proid){

	$id=$_GET['bizid'];


		$select="UPDATE business SET status1='verified' WHERE ID='$id' ";
		$query=mysqli_query($this->con,$select);
		
		if($query){

			echo 'User verified';
			 header("Location:view_biz.php");
		}
}


//add banner
	public function addBana($id,$nem,$tit,$im){

		

		$id= mysqli_real_escape_string($this->con,$id);
		$nem= mysqli_real_escape_string($this->con,$nem);
		$tit= mysqli_real_escape_string($this->con,$tit);
	
 		$cre = date("Y-m-d H:i:s");  
		$house_1 = $_FILES['pic']['name'];
		$tmp_name1 = $_FILES['pic']['tmp_name'];
		$path1 =rand(10000,10000000000);

		$final_path1=$path1.$house_1;
		
		$query=mysqli_query($this->con,"INSERT INTO banner VALUES('','$id','$nem','$tit',
			'$final_path1','$cre','$cre','No')");
		if($query){

       move_uploaded_file($tmp_name1,"../../api/owner/bana/$final_path1");
       
       echo "bana Added added";
			 header("Location:addBana.php");

    }

	}

//get banner
	public function getBan(){

		$bu = "";
		$query=mysqli_query($this->con,"SELECT * FROM banner");
			$i = 0;
		while ($row=mysqli_fetch_array($query)) {
			$id=$row['id'];
			$uid=$row['user_id'];
			$biz=$row['bizname'];
			$tit=$row['title'];
			$biz=$row['bizname'];
			$im=$row['image'];
			$start=$row['start'];
			$end=$row['end'];
			$pay=$row['paid'];
			$i++;


			$bu .= "

				<tr>
                    
                <td>$i</td>
                 <td><img src='../../api/owner/bana/$im' alt='' style='width:40px;height:40px'></td>
              <td>$biz</td>       
              <td>$tit</td>
            
              	
				<td>
				<a href='verify_bana.php?banaid=$id' class='btn btn-outline-success'>Verify</a>
				</td>
              
                <td>
				<a href='detail_bana.php?banaid=$id' class='btn btn-outline-success'>View More</a>
				</td>
              
            </tr>
			";

			

			
			// code...
		}


		return $bu;

	}

//ver banner
public function verBan($proid){

	$id=$_GET['banaid'];


		$select="UPDATE banner SET paid='Yes' WHERE ID='$id' ";
		$query=mysqli_query($this->con,$select);
		
		if($query){

			echo 'User verified';
			 header("Location:view_bana.php");
		}
}

//get user
	public function getUser(){

		$bu = "";
		$query=mysqli_query($this->con,"SELECT * FROM users");
			$i = 0;
		while ($row=mysqli_fetch_array($query)) {
			$id=$row['id'];
			$nem=$row['name'];
			$mail=$row['email'];
			$pass=$row['password'];
			$im=$row['pic'];
			$fon=$row['phone'];
			$last_log=$row['last_log'];
			$creat=$row['create_date'];
			$ad=$row['addr'];
			$lon=$row['lon'];
			$lat=$row['lat'];
			$token=$row['token'];
			$type=$row['type'];
			$stat=$row['status'];
			$renu=$row['renew_date'];
			$fcm=$row['fcmid'];			
			$i++;


			$bu .= "

				<tr>
                    
                <td>$i</td>
                <td>$nem</td>       
              <td>$mail</td>
             <td>$fon</td>
            	 <td>$stat</td>
              	<td>$type</td>
				<td>
				<a href='verify_user.php?uid=$id' class='btn btn-outline-success'>Verify</a>
				</td>
              	
            <td>
				<a href='view_more_user.php?uid=$id' class='btn btn-outline-success'>View More</a>
				</td>
                
            </tr>
			";

			

			
			// code...
		}


		return $bu;

	}

//ver user
public function verUser($proid){

	$id=$proid;


		$select="UPDATE users SET status='verified' WHERE id='$id' ";
		$query=mysqli_query($this->con,$select);
		
		if($query){

			echo 'User verified';
			 header("Location:view_users.php");
		}
}




//add apartment
	public function addApart($nem,$bed,$bath,$fun,$cons,$bs,$sq,$flo,$kit,$price,$de,$loc,$im1,$im2,
		$im3,$im4,$im5){

		

		$nem= mysqli_real_escape_string($this->con,$_POST['name']);
		$bed= mysqli_real_escape_string($this->con,$_POST['bed']);
		$bath= mysqli_real_escape_string($this->con,$_POST['bath']);
		$fun= mysqli_real_escape_string($this->con,$_POST['fun']);
		$cons= mysqli_real_escape_string($this->con,$_POST['cons']);
		$bs= mysqli_real_escape_string($this->con,$_POST['bsft']);
		$sq= mysqli_real_escape_string($this->con,$_POST['csqft']);
		$flo= mysqli_real_escape_string($this->con,$_POST['flo']);
		$kit= mysqli_real_escape_string($this->con,$_POST['kit']);
		$price= mysqli_real_escape_string($this->con,$_POST['price']);
		$de= mysqli_real_escape_string($this->con,$_POST['area']);
		$loc= mysqli_real_escape_string($this->con,$_POST['loc']);

 		$cre = date("Y-m-d H:i:s");  


		$house_1 = $_FILES['pic1']['name'];
		$tmp_name1 = $_FILES['pic1']['tmp_name'];

		$house_2 = $_FILES['pic2']['name'];
		$tmp_name2 = $_FILES['pic2']['tmp_name'];

		$house_3 = $_FILES['pic3']['name'];
		$tmp_name3 = $_FILES['pic3']['tmp_name'];

		$house_4 = $_FILES['pic4']['name'];
		$tmp_name4 = $_FILES['pic4']['tmp_name'];

		$house_5= $_FILES['pic5']['name'];
		$tmp_name5 = $_FILES['pic5']['tmp_name'];


		$path1 =rand(10000,10000000000);

		$final_path1=$path1.$house_1;
		$final_path2=$path1.$house_2;
		$final_path3=$path1.$house_3;
		$final_path4=$path1.$house_4;
		$final_path5=$path1.$house_5;

		$query=mysqli_query($this->con,"INSERT INTO house VALUES('','1','Eazy Rent','0703157610','EazyRent Ltd','0778316724','eazyrent256@gmail.com','$final_path1','$final_path2','$final_path3','$final_path4','$final_path5','$nem','$price','$de','$loc','0.00','0.00','$loc','$bed','$bath','$fun','$cons','$bs','$sq','$flo','$kit','Yes','$cre','$cre','No','Apartments','$path1')");
		if($query){

       move_uploaded_file($tmp_name1,"../../api/owner/mage1/$final_path1");
       move_uploaded_file($tmp_name2,"../../api/owner/mage2/$final_path2");
       move_uploaded_file($tmp_name3,"../../api/owner/mage3/$final_path3");
       move_uploaded_file($tmp_name4,"../../api/owner/mage4/$final_path4");
       move_uploaded_file($tmp_name5,"../../api/owner/mage5/$final_path5");
       echo "apartment added";
			 header("Location:addApart.php");

    }

	}


//get apartment
	public function getApart(){

		$apart="";
		$query=mysqli_query($this->con,"SELECT * FROM house WHERE user_id='1' AND type='Apartments'");
			$i = 0;
		while ($row=mysqli_fetch_array($query)) {
			$id=$row['ID'];
			$uid=$row['user_id'];
			$own=$row['owner'];
			$fon=$row['phone'];
			$biz=$row['bizname'];
			$fon2=$row['num'];
			$mail=$row['mail'];
			$im1=$row['image1'];
			$im2=$row['image2'];
			$im3=$row['image3'];
			$im4=$row['image4'];
			$im5=$row['image5'];
			$tit=$row['title'];
			$pr=$row['price'];
			$de=$row['descc'];
			$ad=$row['adu'];
			$lat=$row['lat'];
			$lon=$row['lon'];
			$place=$row['place'];
			$bed=$row['bed'];
			$bath=$row['bath'];
			$fun=$row['fun'];
			$con=$row['con'];
			$bs=$row['bsqft'];
			$cs=$row['csqft'];
			$flo=$row['floors'];
			$kit=$row['kitchen'];
			$paid=$row['paid'];
			$start=$row['start'];
			$end=$row['end'];
			$blok=$row['blocked'];
			$ty=$row['type'];
			$proid=$row['pro_id'];
			$i++;

			$apart .= "

				<tr>
                    
                <td>$i</td>
                 <td><img src='../../api/owner/mage1/$im1' alt='' style='width:40px;height:40px'></td>    
              <td>$tit</td>
             
              <td><a href='editApart.php?proid=$id' class='btn btn-outline-success'>Edit</a></td>

              <td><a href='del_apart.php?proid=$id' class='btn btn-outline-danger'>Delete</a></td>
             
              
                
            </tr>
			";
			// code...
		}


		return $apart;

	}


//edit apartment
	public function editApart($nem,$bed,$bath,$fun,$cons,$bs,$sq,$flo,$kit,$price,$de,$loc,$id){

		$nem= mysqli_real_escape_string($this->con,$_POST['name']);
		$bed= mysqli_real_escape_string($this->con,$_POST['bed']);
		$bath= mysqli_real_escape_string($this->con,$_POST['bath']);
		$fun= mysqli_real_escape_string($this->con,$_POST['fun']);
		$cons= mysqli_real_escape_string($this->con,$_POST['cons']);
		$bs= mysqli_real_escape_string($this->con,$_POST['bsft']);
		$sq= mysqli_real_escape_string($this->con,$_POST['csqft']);
		$flo= mysqli_real_escape_string($this->con,$_POST['flo']);
		$kit= mysqli_real_escape_string($this->con,$_POST['kit']);
		$price= mysqli_real_escape_string($this->con,$_POST['price']);
		$de= mysqli_real_escape_string($this->con,$_POST['area']);
		$loc= mysqli_real_escape_string($this->con,$_POST['loc']);
		$id = mysqli_real_escape_string($this->con, $id);

		$query=mysqli_query($this->con,"update house set title='$nem', price='$price',descc='$de',adu='$loc',place='$loc',bed='$bed',bath='$bath',fun='$fun',con='$cons',bsqft='$bs',csqft='$sq',floors='$flo',kitchen='$kit' where ID='$id'");

		if($query){

			 echo "apartment edited";
			 header("Location:view_apart.php");
		}
	}

//delete apartment
public function delApart($proid){

	$id=$_GET['proid'];


		$select="SELECT * FROM house WHERE ID='$id' ";
		$query=mysqli_query($this->con,$select);
		$data=mysqli_fetch_array($query);

		if($data['image1']){
			  unlink('../../api/owner/mage1/'.$data['image1']);
		}
		else if($data['image2']){
			  unlink('../../api/owner/mage2/'.$data['image2']);
		}
		else if($data['image3']){
			  unlink('../../api/owner/mage3/'.$data['image3']);
		}
		else if($data['image4']){
			  unlink('../../api/owner/mage4/'.$data['image4']);
		}
		else if($data['image5']){
			  unlink('../../api/owner/mage5/'.$data['image5']);
		}


		$del=mysqli_query($this->con,"DELETE  FROM house WHERE ID='$id'");

		if($del){


			echo "apartment deleted";
			 header("Location:view_apart.php");
		}


}



//add rental
	public function addRental($nem,$bed,$bath,$fun,$cons,$bs,$sq,$flo,$kit,$price,$de,$loc,$im1,$im2,
		$im3,$im4,$im5){

		

		$nem= mysqli_real_escape_string($this->con,$_POST['name']);
		$bed= mysqli_real_escape_string($this->con,$_POST['bed']);
		$bath= mysqli_real_escape_string($this->con,$_POST['bath']);
		$fun= mysqli_real_escape_string($this->con,$_POST['fun']);
		$cons= mysqli_real_escape_string($this->con,$_POST['cons']);
		$bs= mysqli_real_escape_string($this->con,$_POST['bsft']);
		$sq= mysqli_real_escape_string($this->con,$_POST['csqft']);
		$flo= mysqli_real_escape_string($this->con,$_POST['flo']);
		$kit= mysqli_real_escape_string($this->con,$_POST['kit']);
		$price= mysqli_real_escape_string($this->con,$_POST['price']);
		$de= mysqli_real_escape_string($this->con,$_POST['area']);
		$loc= mysqli_real_escape_string($this->con,$_POST['loc']);

 		$cre = date("Y-m-d H:i:s");  


		$house_1 = $_FILES['pic1']['name'];
		$tmp_name1 = $_FILES['pic1']['tmp_name'];

		$house_2 = $_FILES['pic2']['name'];
		$tmp_name2 = $_FILES['pic2']['tmp_name'];

		$house_3 = $_FILES['pic3']['name'];
		$tmp_name3 = $_FILES['pic3']['tmp_name'];

		$house_4 = $_FILES['pic4']['name'];
		$tmp_name4 = $_FILES['pic4']['tmp_name'];

		$house_5= $_FILES['pic5']['name'];
		$tmp_name5 = $_FILES['pic5']['tmp_name'];


		$path1 =rand(10000,10000000000);

		$final_path1=$path1.$house_1;
		$final_path2=$path1.$house_2;
		$final_path3=$path1.$house_3;
		$final_path4=$path1.$house_4;
		$final_path5=$path1.$house_5;

		$query=mysqli_query($this->con,"INSERT INTO house VALUES('','1','Eazy Rent','0703157610','EazyRent Ltd','0778316724','eazyrent256@gmail.com','$final_path1','$final_path2','$final_path3','$final_path4','$final_path5','$nem','$price','$de','$loc','0.00','0.00','$loc','$bed','$bath','$fun','$cons','$bs','$sq','$flo','$kit','Yes','$cre','$cre','No','Rentals','$path1')");
		if($query){

       move_uploaded_file($tmp_name1,"../../api/owner/mage1/$final_path1");
       move_uploaded_file($tmp_name2,"../../api/owner/mage2/$final_path2");
       move_uploaded_file($tmp_name3,"../../api/owner/mage3/$final_path3");
       move_uploaded_file($tmp_name4,"../../api/owner/mage4/$final_path4");
       move_uploaded_file($tmp_name5,"../../api/owner/mage5/$final_path5");
       echo "rental added";
			 header("Location:addRent.php");

    }

	}

//get rental
	public function getRental(){

		$apart="";
		$query=mysqli_query($this->con,"SELECT * FROM house WHERE user_id='1' AND type='Rentals'");
			$i = 0;
		while ($row=mysqli_fetch_array($query)) {
			$id=$row['ID'];
			$uid=$row['user_id'];
			$own=$row['owner'];
			$fon=$row['phone'];
			$biz=$row['bizname'];
			$fon2=$row['num'];
			$mail=$row['mail'];
			$im1=$row['image1'];
			$im2=$row['image2'];
			$im3=$row['image3'];
			$im4=$row['image4'];
			$im5=$row['image5'];
			$tit=$row['title'];
			$pr=$row['price'];
			$de=$row['descc'];
			$ad=$row['adu'];
			$lat=$row['lat'];
			$lon=$row['lon'];
			$place=$row['place'];
			$bed=$row['bed'];
			$bath=$row['bath'];
			$fun=$row['fun'];
			$con=$row['con'];
			$bs=$row['bsqft'];
			$cs=$row['csqft'];
			$flo=$row['floors'];
			$kit=$row['kitchen'];
			$paid=$row['paid'];
			$start=$row['start'];
			$end=$row['end'];
			$blok=$row['blocked'];
			$ty=$row['type'];
			$proid=$row['pro_id'];
			$i++;

			$apart .= "

				<tr>
                    
                <td>$i</td>
                 <td><img src='../../api/owner/mage1/$im1' alt='' style='width:40px;height:40px'></td>    
              <td>$tit</td>
             
              <td><a href='editRental.php?proid=$id' class='btn btn-outline-success'>Edit</a></td>

              <td><a href='del_rent.php?proid=$id' class='btn btn-outline-danger'>Delete</a></td>
             
              
                
            </tr>
			";
			// code...
		}


		return $apart;

	}


//edit rental
	public function editRental($nem,$bed,$bath,$fun,$cons,$bs,$sq,$flo,$kit,$price,$de,$loc,$id){

		$nem= mysqli_real_escape_string($this->con,$_POST['name']);
		$bed= mysqli_real_escape_string($this->con,$_POST['bed']);
		$bath= mysqli_real_escape_string($this->con,$_POST['bath']);
		$fun= mysqli_real_escape_string($this->con,$_POST['fun']);
		$cons= mysqli_real_escape_string($this->con,$_POST['cons']);
		$bs= mysqli_real_escape_string($this->con,$_POST['bsft']);
		$sq= mysqli_real_escape_string($this->con,$_POST['csqft']);
		$flo= mysqli_real_escape_string($this->con,$_POST['flo']);
		$kit= mysqli_real_escape_string($this->con,$_POST['kit']);
		$price= mysqli_real_escape_string($this->con,$_POST['price']);
		$de= mysqli_real_escape_string($this->con,$_POST['area']);
		$loc= mysqli_real_escape_string($this->con,$_POST['loc']);
		$id = mysqli_real_escape_string($this->con, $id);

		$query=mysqli_query($this->con,"update house set title='$nem', price='$price',descc='$de',adu='$loc',place='$loc',bed='$bed',bath='$bath',fun='$fun',con='$cons',bsqft='$bs',csqft='$sq',floors='$flo',kitchen='$kit' where ID='$id'");

		if($query){

			 echo "rental edited";
			 header("Location:view_rent.php");
		}
	}


//delete rental
public function delRent($proid){

	$id=$_GET['proid'];


		$select="SELECT * FROM house WHERE ID='$id' ";
		$query=mysqli_query($this->con,$select);
		$data=mysqli_fetch_array($query);

		if($data['image1']){
			  unlink('../../api/owner/mage1/'.$data['image1']);
		}
		else if($data['image2']){
			  unlink('../../api/owner/mage2/'.$data['image2']);
		}
		else if($data['image3']){
			  unlink('../../api/owner/mage3/'.$data['image3']);
		}
		else if($data['image4']){
			  unlink('../../api/owner/mage4/'.$data['image4']);
		}
		else if($data['image5']){
			  unlink('../../api/owner/mage5/'.$data['image5']);
		}


		$del=mysqli_query($this->con,"DELETE  FROM house WHERE ID='$id'");

		if($del){


			echo "apartment deleted";
			 header("Location:view_rent.php");
		}


}


//add bangalow
	public function addBang($nem,$bed,$bath,$fun,$cons,$bs,$sq,$flo,$kit,$price,$de,$loc,$im1,$im2,
		$im3,$im4,$im5){

		

		$nem= mysqli_real_escape_string($this->con,$_POST['name']);
		$bed= mysqli_real_escape_string($this->con,$_POST['bed']);
		$bath= mysqli_real_escape_string($this->con,$_POST['bath']);
		$fun= mysqli_real_escape_string($this->con,$_POST['fun']);
		$cons= mysqli_real_escape_string($this->con,$_POST['cons']);
		$bs= mysqli_real_escape_string($this->con,$_POST['bsft']);
		$sq= mysqli_real_escape_string($this->con,$_POST['csqft']);
		$flo= mysqli_real_escape_string($this->con,$_POST['flo']);
		$kit= mysqli_real_escape_string($this->con,$_POST['kit']);
		$price= mysqli_real_escape_string($this->con,$_POST['price']);
		$de= mysqli_real_escape_string($this->con,$_POST['area']);
		$loc= mysqli_real_escape_string($this->con,$_POST['loc']);

 		$cre = date("Y-m-d H:i:s");  


		$house_1 = $_FILES['pic1']['name'];
		$tmp_name1 = $_FILES['pic1']['tmp_name'];

		$house_2 = $_FILES['pic2']['name'];
		$tmp_name2 = $_FILES['pic2']['tmp_name'];

		$house_3 = $_FILES['pic3']['name'];
		$tmp_name3 = $_FILES['pic3']['tmp_name'];

		$house_4 = $_FILES['pic4']['name'];
		$tmp_name4 = $_FILES['pic4']['tmp_name'];

		$house_5= $_FILES['pic5']['name'];
		$tmp_name5 = $_FILES['pic5']['tmp_name'];


		$path1 =rand(10000,10000000000);

		$final_path1=$path1.$house_1;
		$final_path2=$path1.$house_2;
		$final_path3=$path1.$house_3;
		$final_path4=$path1.$house_4;
		$final_path5=$path1.$house_5;

		$query=mysqli_query($this->con,"INSERT INTO house VALUES('','1','Eazy Rent','0703157610','EazyRent Ltd','0778316724','eazyrent256@gmail.com','$final_path1','$final_path2','$final_path3','$final_path4','$final_path5','$nem','$price','$de','$loc','0.00','0.00','$loc','$bed','$bath','$fun','$cons','$bs','$sq','$flo','$kit','Yes','$cre','$cre','No','Bangalows','$path1')");
		if($query){

       move_uploaded_file($tmp_name1,"../../api/owner/mage1/$final_path1");
       move_uploaded_file($tmp_name2,"../../api/owner/mage2/$final_path2");
       move_uploaded_file($tmp_name3,"../../api/owner/mage3/$final_path3");
       move_uploaded_file($tmp_name4,"../../api/owner/mage4/$final_path4");
       move_uploaded_file($tmp_name5,"../../api/owner/mage5/$final_path5");
       echo "bangalow added";
			 header("Location:addBang.php");

    }

	}


//get bang
	public function getBang(){

		$apart="";
		$query=mysqli_query($this->con,"SELECT * FROM house WHERE user_id='1' AND type='Bangalows'");
			$i = 0;
		while ($row=mysqli_fetch_array($query)) {
			$id=$row['ID'];
			$uid=$row['user_id'];
			$own=$row['owner'];
			$fon=$row['phone'];
			$biz=$row['bizname'];
			$fon2=$row['num'];
			$mail=$row['mail'];
			$im1=$row['image1'];
			$im2=$row['image2'];
			$im3=$row['image3'];
			$im4=$row['image4'];
			$im5=$row['image5'];
			$tit=$row['title'];
			$pr=$row['price'];
			$de=$row['descc'];
			$ad=$row['adu'];
			$lat=$row['lat'];
			$lon=$row['lon'];
			$place=$row['place'];
			$bed=$row['bed'];
			$bath=$row['bath'];
			$fun=$row['fun'];
			$con=$row['con'];
			$bs=$row['bsqft'];
			$cs=$row['csqft'];
			$flo=$row['floors'];
			$kit=$row['kitchen'];
			$paid=$row['paid'];
			$start=$row['start'];
			$end=$row['end'];
			$blok=$row['blocked'];
			$ty=$row['type'];
			$proid=$row['pro_id'];
			$i++;

			$apart .= "

				<tr>
                    
                <td>$i</td>
                 <td><img src='../../api/owner/mage1/$im1' alt='' style='width:40px;height:40px'></td>    
              <td>$tit</td>
             
              <td><a href='editBang.php?proid=$id' class='btn btn-outline-success'>Edit</a></td>

              <td><a href='del_bang.php?proid=$id' class='btn btn-outline-danger'>Delete</a></td>
             
              
                
            </tr>
			";
			// code...
		}


		return $apart;

	}

//edit bang
	public function editBang($nem,$bed,$bath,$fun,$cons,$bs,$sq,$flo,$kit,$price,$de,$loc,$id){

		$nem= mysqli_real_escape_string($this->con,$_POST['name']);
		$bed= mysqli_real_escape_string($this->con,$_POST['bed']);
		$bath= mysqli_real_escape_string($this->con,$_POST['bath']);
		$fun= mysqli_real_escape_string($this->con,$_POST['fun']);
		$cons= mysqli_real_escape_string($this->con,$_POST['cons']);
		$bs= mysqli_real_escape_string($this->con,$_POST['bsft']);
		$sq= mysqli_real_escape_string($this->con,$_POST['csqft']);
		$flo= mysqli_real_escape_string($this->con,$_POST['flo']);
		$kit= mysqli_real_escape_string($this->con,$_POST['kit']);
		$price= mysqli_real_escape_string($this->con,$_POST['price']);
		$de= mysqli_real_escape_string($this->con,$_POST['area']);
		$loc= mysqli_real_escape_string($this->con,$_POST['loc']);
		$id = mysqli_real_escape_string($this->con, $id);

		$query=mysqli_query($this->con,"update house set title='$nem', price='$price',descc='$de',adu='$loc',place='$loc',bed='$bed',bath='$bath',fun='$fun',con='$cons',bsqft='$bs',csqft='$sq',floors='$flo',kitchen='$kit' where ID='$id'");

		if($query){

			 echo "bangalow edited";
			 header("Location:view_bang.php");
		}
	}


//delete bangalow
public function delBang($proid){

	$id=$_GET['proid'];


		$select="SELECT * FROM house WHERE ID='$id' ";
		$query=mysqli_query($this->con,$select);
		$data=mysqli_fetch_array($query);

		if($data['image1']){
			  unlink('../../api/owner/mage1/'.$data['image1']);
		}
		else if($data['image2']){
			  unlink('../../api/owner/mage2/'.$data['image2']);
		}
		else if($data['image3']){
			  unlink('../../api/owner/mage3/'.$data['image3']);
		}
		else if($data['image4']){
			  unlink('../../api/owner/mage4/'.$data['image4']);
		}
		else if($data['image5']){
			  unlink('../../api/owner/mage5/'.$data['image5']);
		}


		$del=mysqli_query($this->con,"DELETE  FROM house WHERE ID='$id'");

		if($del){


			echo "bangalow deleted";
			 header("Location:view_bang.php");
		}


}



//add hostel
	public function addHost($nem,$bed,$bath,$fun,$cons,$bs,$sq,$flo,$kit,$price,$de,$loc,$im1,$im2,
		$im3,$im4,$im5){

		

		$nem= mysqli_real_escape_string($this->con,$_POST['name']);
		$bed= mysqli_real_escape_string($this->con,$_POST['bed']);
		$bath= mysqli_real_escape_string($this->con,$_POST['bath']);
		$fun= mysqli_real_escape_string($this->con,$_POST['fun']);
		$cons= mysqli_real_escape_string($this->con,$_POST['cons']);
		$bs= mysqli_real_escape_string($this->con,$_POST['bsft']);
		$sq= mysqli_real_escape_string($this->con,$_POST['csqft']);
		$flo= mysqli_real_escape_string($this->con,$_POST['flo']);
		$kit= mysqli_real_escape_string($this->con,$_POST['kit']);
		$price= mysqli_real_escape_string($this->con,$_POST['price']);
		$de= mysqli_real_escape_string($this->con,$_POST['area']);
		$loc= mysqli_real_escape_string($this->con,$_POST['loc']);

 		$cre = date("Y-m-d H:i:s");  


		$house_1 = $_FILES['pic1']['name'];
		$tmp_name1 = $_FILES['pic1']['tmp_name'];

		$house_2 = $_FILES['pic2']['name'];
		$tmp_name2 = $_FILES['pic2']['tmp_name'];

		$house_3 = $_FILES['pic3']['name'];
		$tmp_name3 = $_FILES['pic3']['tmp_name'];

		$house_4 = $_FILES['pic4']['name'];
		$tmp_name4 = $_FILES['pic4']['tmp_name'];

		$house_5= $_FILES['pic5']['name'];
		$tmp_name5 = $_FILES['pic5']['tmp_name'];


		$path1 =rand(10000,10000000000);

		$final_path1=$path1.$house_1;
		$final_path2=$path1.$house_2;
		$final_path3=$path1.$house_3;
		$final_path4=$path1.$house_4;
		$final_path5=$path1.$house_5;

		$query=mysqli_query($this->con,"INSERT INTO house VALUES('','1','Eazy Rent','0703157610','EazyRent Ltd','0778316724','eazyrent256@gmail.com','$final_path1','$final_path2','$final_path3','$final_path4','$final_path5','$nem','$price','$de','$loc','0.00','0.00','$loc','$bed','$bath','$fun','$cons','$bs','$sq','$flo','$kit','Yes','$cre','$cre','No','Hostels','$path1')");
		if($query){

       move_uploaded_file($tmp_name1,"../../api/owner/mage1/$final_path1");
       move_uploaded_file($tmp_name2,"../../api/owner/mage2/$final_path2");
       move_uploaded_file($tmp_name3,"../../api/owner/mage3/$final_path3");
       move_uploaded_file($tmp_name4,"../../api/owner/mage4/$final_path4");
       move_uploaded_file($tmp_name5,"../../api/owner/mage5/$final_path5");
       echo "hostel added";
			 header("Location:addHostel.php");

    }

	}


//get host
	public function getHost(){

		$apart="";
		$query=mysqli_query($this->con,"SELECT * FROM house WHERE user_id='1' AND type='Hostels'");
			$i = 0;
		while ($row=mysqli_fetch_array($query)) {
			$id=$row['ID'];
			$uid=$row['user_id'];
			$own=$row['owner'];
			$fon=$row['phone'];
			$biz=$row['bizname'];
			$fon2=$row['num'];
			$mail=$row['mail'];
			$im1=$row['image1'];
			$im2=$row['image2'];
			$im3=$row['image3'];
			$im4=$row['image4'];
			$im5=$row['image5'];
			$tit=$row['title'];
			$pr=$row['price'];
			$de=$row['descc'];
			$ad=$row['adu'];
			$lat=$row['lat'];
			$lon=$row['lon'];
			$place=$row['place'];
			$bed=$row['bed'];
			$bath=$row['bath'];
			$fun=$row['fun'];
			$con=$row['con'];
			$bs=$row['bsqft'];
			$cs=$row['csqft'];
			$flo=$row['floors'];
			$kit=$row['kitchen'];
			$paid=$row['paid'];
			$start=$row['start'];
			$end=$row['end'];
			$blok=$row['blocked'];
			$ty=$row['type'];
			$proid=$row['pro_id'];
			$i++;

			$apart .= "

				<tr>
                    
                <td>$i</td>
                 <td><img src='../../api/owner/mage1/$im1' alt='' style='width:40px;height:40px'></td>    
              <td>$tit</td>
             
              <td><a href='editHost.php?proid=$id' class='btn btn-outline-success'>Edit</a></td>

              <td><a href='del_host.php?proid=$id' class='btn btn-outline-danger'>Delete</a></td>
             
              
                
            </tr>
			";
			// code...
		}


		return $apart;

	}


//edit host
	public function editHost($nem,$bed,$bath,$fun,$cons,$bs,$sq,$flo,$kit,$price,$de,$loc,$id){

		$nem= mysqli_real_escape_string($this->con,$_POST['name']);
		$bed= mysqli_real_escape_string($this->con,$_POST['bed']);
		$bath= mysqli_real_escape_string($this->con,$_POST['bath']);
		$fun= mysqli_real_escape_string($this->con,$_POST['fun']);
		$cons= mysqli_real_escape_string($this->con,$_POST['cons']);
		$bs= mysqli_real_escape_string($this->con,$_POST['bsft']);
		$sq= mysqli_real_escape_string($this->con,$_POST['csqft']);
		$flo= mysqli_real_escape_string($this->con,$_POST['flo']);
		$kit= mysqli_real_escape_string($this->con,$_POST['kit']);
		$price= mysqli_real_escape_string($this->con,$_POST['price']);
		$de= mysqli_real_escape_string($this->con,$_POST['area']);
		$loc= mysqli_real_escape_string($this->con,$_POST['loc']);
		$id = mysqli_real_escape_string($this->con, $id);

		$query=mysqli_query($this->con,"update house set title='$nem', price='$price',descc='$de',adu='$loc',place='$loc',bed='$bed',bath='$bath',fun='$fun',con='$cons',bsqft='$bs',csqft='$sq',floors='$flo',kitchen='$kit' where ID='$id'");

		if($query){

			 echo "hostel edited";
			 header("Location:view_hostel.php");
		}
	}



//delete hostel
public function delHost($proid){

	$id=$_GET['proid'];


		$select="SELECT * FROM house WHERE ID='$id' ";
		$query=mysqli_query($this->con,$select);
		$data=mysqli_fetch_array($query);

		if($data['image1']){
			  unlink('../../api/owner/mage1/'.$data['image1']);
		}
		else if($data['image2']){
			  unlink('../../api/owner/mage2/'.$data['image2']);
		}
		else if($data['image3']){
			  unlink('../../api/owner/mage3/'.$data['image3']);
		}
		else if($data['image4']){
			  unlink('../../api/owner/mage4/'.$data['image4']);
		}
		else if($data['image5']){
			  unlink('../../api/owner/mage5/'.$data['image5']);
		}


		$del=mysqli_query($this->con,"DELETE  FROM house WHERE ID='$id'");

		if($del){


			echo "hostel deleted";
			 header("Location:view_hostel.php");
		}


}



//add land
	public function addLand($nem,$ac,$price,$de,$loc,$im1,$im2,
		$im3,$im4,$im5){

		

		$nem= mysqli_real_escape_string($this->con,$_POST['name']);
		$ac= mysqli_real_escape_string($this->con,$_POST['acres']);
		$price= mysqli_real_escape_string($this->con,$_POST['price']);
		$de= mysqli_real_escape_string($this->con,$_POST['area']);
		$loc= mysqli_real_escape_string($this->con,$_POST['loc']);

 		$cre = date("Y-m-d H:i:s");  


		$house_1 = $_FILES['pic1']['name'];
		$tmp_name1 = $_FILES['pic1']['tmp_name'];

		$house_2 = $_FILES['pic2']['name'];
		$tmp_name2 = $_FILES['pic2']['tmp_name'];

		$house_3 = $_FILES['pic3']['name'];
		$tmp_name3 = $_FILES['pic3']['tmp_name'];

		$house_4 = $_FILES['pic4']['name'];
		$tmp_name4 = $_FILES['pic4']['tmp_name'];

		$house_5= $_FILES['pic5']['name'];
		$tmp_name5 = $_FILES['pic5']['tmp_name'];


		$path1 =rand(10000,10000000000);

		$final_path1=$path1.$house_1;
		$final_path2=$path1.$house_2;
		$final_path3=$path1.$house_3;
		$final_path4=$path1.$house_4;
		$final_path5=$path1.$house_5;

		$query=mysqli_query($this->con,"INSERT INTO house VALUES('','1','Eazy Rent','0703157610','EazyRent Ltd','0778316724','eazyrent256@gmail.com','$final_path1','$final_path2','$final_path3','$final_path4','$final_path5','$nem','$price','$de','$loc','0.00','0.00','$loc','0','0','0','0','$ac','$ac','0','0','Yes','$cre','$cre','No','Land','$path1')");
		if($query){

       move_uploaded_file($tmp_name1,"../../api/owner/mage1/$final_path1");
       move_uploaded_file($tmp_name2,"../../api/owner/mage2/$final_path2");
       move_uploaded_file($tmp_name3,"../../api/owner/mage3/$final_path3");
       move_uploaded_file($tmp_name4,"../../api/owner/mage4/$final_path4");
       move_uploaded_file($tmp_name5,"../../api/owner/mage5/$final_path5");
       echo "land added";
			 header("Location:addLa.php");

    }

	}

//get host
	public function getland(){

		$apart="";
		$query=mysqli_query($this->con,"SELECT * FROM house WHERE user_id='1' AND type='Land'");
			$i = 0;
		while ($row=mysqli_fetch_array($query)) {
			$id=$row['ID'];
			$uid=$row['user_id'];
			$own=$row['owner'];
			$fon=$row['phone'];
			$biz=$row['bizname'];
			$fon2=$row['num'];
			$mail=$row['mail'];
			$im1=$row['image1'];
			$im2=$row['image2'];
			$im3=$row['image3'];
			$im4=$row['image4'];
			$im5=$row['image5'];
			$tit=$row['title'];
			$pr=$row['price'];
			$de=$row['descc'];
			$ad=$row['adu'];
			$lat=$row['lat'];
			$lon=$row['lon'];
			$place=$row['place'];
			$bed=$row['bed'];
			$bath=$row['bath'];
			$fun=$row['fun'];
			$con=$row['con'];
			$bs=$row['bsqft'];
			$cs=$row['csqft'];
			$flo=$row['floors'];
			$kit=$row['kitchen'];
			$paid=$row['paid'];
			$start=$row['start'];
			$end=$row['end'];
			$blok=$row['blocked'];
			$ty=$row['type'];
			$proid=$row['pro_id'];
			$i++;

			$apart .= "

				<tr>
                    
                <td>$i</td>
                 <td><img src='../../api/owner/mage1/$im1' alt='' style='width:40px;height:40px'></td>    
              <td>$tit</td>
             
              <td><a href='editLand.php?proid=$id' class='btn btn-outline-success'>Edit</a></td>

              <td><a href='del_land.php?proid=$id' class='btn btn-outline-danger'>Delete</a></td>
             
              
                
            </tr>
			";
			// code...
		}


		return $apart;

	}

//edit land
	public function editLand($nem,$ac,$price,$de,$loc,$id){

		
		$nem= mysqli_real_escape_string($this->con,$_POST['name']);
		$ac= mysqli_real_escape_string($this->con,$_POST['acres']);
		$price= mysqli_real_escape_string($this->con,$_POST['price']);
		$de= mysqli_real_escape_string($this->con,$_POST['area']);
		$loc= mysqli_real_escape_string($this->con,$_POST['loc']);
		$id = mysqli_real_escape_string($this->con, $id);

		$query=mysqli_query($this->con,"update house set title='$nem', price='$price',descc='$de',adu='$loc',place='$loc',bsqft='$ac',csqft='$ac' where ID='$id'");

		if($query){

			 echo "hostel edited";
			 header("Location:view_land.php");
		}
	}


//delete land
public function delLand($proid){

	$id=$_GET['proid'];


		$select="SELECT * FROM house WHERE ID='$id' ";
		$query=mysqli_query($this->con,$select);
		$data=mysqli_fetch_array($query);

		if($data['image1']){
			  unlink('../../api/owner/mage1/'.$data['image1']);
		}
		else if($data['image2']){
			  unlink('../../api/owner/mage2/'.$data['image2']);
		}
		else if($data['image3']){
			  unlink('../../api/owner/mage3/'.$data['image3']);
		}
		else if($data['image4']){
			  unlink('../../api/owner/mage4/'.$data['image4']);
		}
		else if($data['image5']){
			  unlink('../../api/owner/mage5/'.$data['image5']);
		}


		$del=mysqli_query($this->con,"DELETE  FROM house WHERE ID='$id'");

		if($del){


			echo "land deleted";
			 header("Location:view_land.php");
		}


}	




//add office
	public function addOff($nem,$fun,$cons,$bs,$sq,$price,$de,$loc,$im1,$im2,
		$im3,$im4,$im5){

		

		$nem= mysqli_real_escape_string($this->con,$_POST['name']);
		
		$fun= mysqli_real_escape_string($this->con,$_POST['fun']);
		$cons= mysqli_real_escape_string($this->con,$_POST['cons']);
		$bs= mysqli_real_escape_string($this->con,$_POST['bsft']);
		$sq= mysqli_real_escape_string($this->con,$_POST['csqft']);
		
		$price= mysqli_real_escape_string($this->con,$_POST['price']);
		$de= mysqli_real_escape_string($this->con,$_POST['area']);
		$loc= mysqli_real_escape_string($this->con,$_POST['loc']);

 		$cre = date("Y-m-d H:i:s");  


		$house_1 = $_FILES['pic1']['name'];
		$tmp_name1 = $_FILES['pic1']['tmp_name'];

		$house_2 = $_FILES['pic2']['name'];
		$tmp_name2 = $_FILES['pic2']['tmp_name'];

		$house_3 = $_FILES['pic3']['name'];
		$tmp_name3 = $_FILES['pic3']['tmp_name'];

		$house_4 = $_FILES['pic4']['name'];
		$tmp_name4 = $_FILES['pic4']['tmp_name'];

		$house_5= $_FILES['pic5']['name'];
		$tmp_name5 = $_FILES['pic5']['tmp_name'];


		$path1 =rand(10000,10000000000);

		$final_path1=$path1.$house_1;
		$final_path2=$path1.$house_2;
		$final_path3=$path1.$house_3;
		$final_path4=$path1.$house_4;
		$final_path5=$path1.$house_5;

		$query=mysqli_query($this->con,"INSERT INTO house VALUES('','1','Eazy Rent','0703157610','EazyRent Ltd','0778316724','eazyrent256@gmail.com','$final_path1','$final_path2','$final_path3','$final_path4','$final_path5','$nem','$price','$de','$loc','0.00','0.00','$loc','0','0','$fun','$cons','$bs','$sq','0','0','Yes','$cre','$cre','No','Office Space','$path1')");
		if($query){

       move_uploaded_file($tmp_name1,"../../api/owner/mage1/$final_path1");
       move_uploaded_file($tmp_name2,"../../api/owner/mage2/$final_path2");
       move_uploaded_file($tmp_name3,"../../api/owner/mage3/$final_path3");
       move_uploaded_file($tmp_name4,"../../api/owner/mage4/$final_path4");
       move_uploaded_file($tmp_name5,"../../api/owner/mage5/$final_path5");
       echo "office space added";
			 header("Location:addOff.php");

    }

	}



//get off
	public function getOff(){

		$apart="";
		$query=mysqli_query($this->con,"SELECT * FROM house WHERE user_id='1' AND type='Office Space'");
			$i = 0;
		while ($row=mysqli_fetch_array($query)) {
			$id=$row['ID'];
			$uid=$row['user_id'];
			$own=$row['owner'];
			$fon=$row['phone'];
			$biz=$row['bizname'];
			$fon2=$row['num'];
			$mail=$row['mail'];
			$im1=$row['image1'];
			$im2=$row['image2'];
			$im3=$row['image3'];
			$im4=$row['image4'];
			$im5=$row['image5'];
			$tit=$row['title'];
			$pr=$row['price'];
			$de=$row['descc'];
			$ad=$row['adu'];
			$lat=$row['lat'];
			$lon=$row['lon'];
			$place=$row['place'];
			$bed=$row['bed'];
			$bath=$row['bath'];
			$fun=$row['fun'];
			$con=$row['con'];
			$bs=$row['bsqft'];
			$cs=$row['csqft'];
			$flo=$row['floors'];
			$kit=$row['kitchen'];
			$paid=$row['paid'];
			$start=$row['start'];
			$end=$row['end'];
			$blok=$row['blocked'];
			$ty=$row['type'];
			$proid=$row['pro_id'];
			$i++;

			$apart .= "

				<tr>
                    
                <td>$i</td>
                 <td><img src='../../api/owner/mage1/$im1' alt='' style='width:40px;height:40px'></td>    
              <td>$tit</td>
             
              <td><a href='editOff.php?proid=$id' class='btn btn-outline-success'>Edit</a></td>

              <td><a href='del_off.php?proid=$id' class='btn btn-outline-danger'>Delete</a></td>
             
              
                
            </tr>
			";
			// code...
		}


		return $apart;

	}


//edit off
	public function editOff($nem,$bed,$cons,$bs,$sq,$price,$de,$loc,$id){

		$nem= mysqli_real_escape_string($this->con,$_POST['name']);
		
		$fun= mysqli_real_escape_string($this->con,$_POST['fun']);
		$cons= mysqli_real_escape_string($this->con,$_POST['cons']);
		$bs= mysqli_real_escape_string($this->con,$_POST['bsft']);
		$sq= mysqli_real_escape_string($this->con,$_POST['csqft']);
		;
		$price= mysqli_real_escape_string($this->con,$_POST['price']);
		$de= mysqli_real_escape_string($this->con,$_POST['area']);
		$loc= mysqli_real_escape_string($this->con,$_POST['loc']);
		$id = mysqli_real_escape_string($this->con, $id);

		$query=mysqli_query($this->con,"update house set title='$nem', price='$price',descc='$de',adu='$loc',place='$loc',fun='$fun',con='$cons',bsqft='$bs',csqft='$sq' where ID='$id'");

		if($query){

			 echo "office edited";
			 header("Location:view_off.php");
		}
	}

//delete off
public function delOff($proid){

	$id=$_GET['proid'];


		$select="SELECT * FROM house WHERE ID='$id' ";
		$query=mysqli_query($this->con,$select);
		$data=mysqli_fetch_array($query);

		if($data['image1']){
			  unlink('../../api/owner/mage1/'.$data['image1']);
		}
		else if($data['image2']){
			  unlink('../../api/owner/mage2/'.$data['image2']);
		}
		else if($data['image3']){
			  unlink('../../api/owner/mage3/'.$data['image3']);
		}
		else if($data['image4']){
			  unlink('../../api/owner/mage4/'.$data['image4']);
		}
		else if($data['image5']){
			  unlink('../../api/owner/mage5/'.$data['image5']);
		}


		$del=mysqli_query($this->con,"DELETE  FROM house WHERE ID='$id'");

		if($del){


			echo "office space deleted";
			 header("Location:view_off.php");
		}


}	




//add b nb
	public function addTour($nem,$bed,$bath,$fun,$cons,$bs,$sq,$flo,$kit,$price,$de,$loc,$im1,$im2,
		$im3,$im4,$im5){

		

		$nem= mysqli_real_escape_string($this->con,$_POST['name']);
		$bed= mysqli_real_escape_string($this->con,$_POST['bed']);
		$bath= mysqli_real_escape_string($this->con,$_POST['bath']);
		$fun= mysqli_real_escape_string($this->con,$_POST['fun']);
		$cons= mysqli_real_escape_string($this->con,$_POST['cons']);
		$bs= mysqli_real_escape_string($this->con,$_POST['bsft']);
		$sq= mysqli_real_escape_string($this->con,$_POST['csqft']);
		$flo= mysqli_real_escape_string($this->con,$_POST['flo']);
		$kit= mysqli_real_escape_string($this->con,$_POST['kit']);
		$price= mysqli_real_escape_string($this->con,$_POST['price']);
		$de= mysqli_real_escape_string($this->con,$_POST['area']);
		$loc= mysqli_real_escape_string($this->con,$_POST['loc']);

 		$cre = date("Y-m-d H:i:s");  


		$house_1 = $_FILES['pic1']['name'];
		$tmp_name1 = $_FILES['pic1']['tmp_name'];

		$house_2 = $_FILES['pic2']['name'];
		$tmp_name2 = $_FILES['pic2']['tmp_name'];

		$house_3 = $_FILES['pic3']['name'];
		$tmp_name3 = $_FILES['pic3']['tmp_name'];

		$house_4 = $_FILES['pic4']['name'];
		$tmp_name4 = $_FILES['pic4']['tmp_name'];

		$house_5= $_FILES['pic5']['name'];
		$tmp_name5 = $_FILES['pic5']['tmp_name'];


		$path1 =rand(10000,10000000000);

		$final_path1=$path1.$house_1;
		$final_path2=$path1.$house_2;
		$final_path3=$path1.$house_3;
		$final_path4=$path1.$house_4;
		$final_path5=$path1.$house_5;

		$query=mysqli_query($this->con,"INSERT INTO house VALUES('','1','Eazy Rent','0703157610','EazyRent Ltd','0778316724','eazyrent256@gmail.com','$final_path1','$final_path2','$final_path3','$final_path4','$final_path5','$nem','$price','$de','$loc','0.00','0.00','$loc','$bed','$bath','$fun','$cons','$bs','$sq','$flo','$kit','Yes','$cre','$cre','No','Tourist B & B','$path1')");
		if($query){

       move_uploaded_file($tmp_name1,"../../api/owner/mage1/$final_path1");
       move_uploaded_file($tmp_name2,"../../api/owner/mage2/$final_path2");
       move_uploaded_file($tmp_name3,"../../api/owner/mage3/$final_path3");
       move_uploaded_file($tmp_name4,"../../api/owner/mage4/$final_path4");
       move_uploaded_file($tmp_name5,"../../api/owner/mage5/$final_path5");
       echo "tourist added";
			 header("Location:addTour.php");

    }

	}

//get b n b
	public function getTour(){

		$apart="";
		$query=mysqli_query($this->con,"SELECT * FROM house WHERE user_id='1' AND type='Tourist B & B'");
			$i = 0;
		while ($row=mysqli_fetch_array($query)) {
			$id=$row['ID'];
			$uid=$row['user_id'];
			$own=$row['owner'];
			$fon=$row['phone'];
			$biz=$row['bizname'];
			$fon2=$row['num'];
			$mail=$row['mail'];
			$im1=$row['image1'];
			$im2=$row['image2'];
			$im3=$row['image3'];
			$im4=$row['image4'];
			$im5=$row['image5'];
			$tit=$row['title'];
			$pr=$row['price'];
			$de=$row['descc'];
			$ad=$row['adu'];
			$lat=$row['lat'];
			$lon=$row['lon'];
			$place=$row['place'];
			$bed=$row['bed'];
			$bath=$row['bath'];
			$fun=$row['fun'];
			$con=$row['con'];
			$bs=$row['bsqft'];
			$cs=$row['csqft'];
			$flo=$row['floors'];
			$kit=$row['kitchen'];
			$paid=$row['paid'];
			$start=$row['start'];
			$end=$row['end'];
			$blok=$row['blocked'];
			$ty=$row['type'];
			$proid=$row['pro_id'];
			$i++;

			$apart .= "

				<tr>
                    
                <td>$i</td>
                 <td><img src='../../api/owner/mage1/$im1' alt='' style='width:40px;height:40px'></td>    
              <td>$tit</td>
             
              <td><a href='edit_tour.php?proid=$id' class='btn btn-outline-success'>Edit</a></td>

              <td><a href='del_tour.php?proid=$id' class='btn btn-outline-danger'>Delete</a></td>
             
              
                
            </tr>
			";
			// code...
		}


		return $apart;

	}


		//edit b n b
		public function editB($nem,$bed,$bath,$fun,$cons,$bs,$sq,$flo,$kit,$price,$de,$loc,$id){

		$nem= mysqli_real_escape_string($this->con,$_POST['name']);
		$bed= mysqli_real_escape_string($this->con,$_POST['bed']);
		$bath= mysqli_real_escape_string($this->con,$_POST['bath']);
		$fun= mysqli_real_escape_string($this->con,$_POST['fun']);
		$cons= mysqli_real_escape_string($this->con,$_POST['cons']);
		$bs= mysqli_real_escape_string($this->con,$_POST['bsft']);
		$sq= mysqli_real_escape_string($this->con,$_POST['csqft']);
		$flo= mysqli_real_escape_string($this->con,$_POST['flo']);
		$kit= mysqli_real_escape_string($this->con,$_POST['kit']);
		$price= mysqli_real_escape_string($this->con,$_POST['price']);
		$de= mysqli_real_escape_string($this->con,$_POST['area']);
		$loc= mysqli_real_escape_string($this->con,$_POST['loc']);
		$id = mysqli_real_escape_string($this->con, $id);

		$query=mysqli_query($this->con,"update house set title='$nem', price='$price',descc='$de',adu='$loc',place='$loc',bed='$bed',bath='$bath',fun='$fun',con='$cons',bsqft='$bs',csqft='$sq',floors='$flo',kitchen='$kit' where ID='$id'");

		if($query){

			 echo "tourist b n b edited";
			 header("Location:view_tour.php");
		}
	}




//delete tour
public function delTour($proid){

	$id=$_GET['proid'];


		$select="SELECT * FROM house WHERE ID='$id' ";
		$query=mysqli_query($this->con,$select);
		$data=mysqli_fetch_array($query);

		if($data['image1']){
			  unlink('../../api/owner/mage1/'.$data['image1']);
		}
		else if($data['image2']){
			  unlink('../../api/owner/mage2/'.$data['image2']);
		}
		else if($data['image3']){
			  unlink('../../api/owner/mage3/'.$data['image3']);
		}
		else if($data['image4']){
			  unlink('../../api/owner/mage4/'.$data['image4']);
		}
		else if($data['image5']){
			  unlink('../../api/owner/mage5/'.$data['image5']);
		}


		$del=mysqli_query($this->con,"DELETE  FROM house WHERE ID='$id'");

		if($del){


			echo "tourist b and b deleted";
			 header("Location:view_tour.php");
		}


}	



//add warehouse
	public function addWare($nem,$fun,$cons,$bs,$sq,$price,$de,$loc,$im1,$im2,
		$im3,$im4,$im5){

		

		$nem= mysqli_real_escape_string($this->con,$_POST['name']);
		
		$fun= mysqli_real_escape_string($this->con,$_POST['fun']);
		$cons= mysqli_real_escape_string($this->con,$_POST['cons']);
		$bs= mysqli_real_escape_string($this->con,$_POST['bsft']);
		$sq= mysqli_real_escape_string($this->con,$_POST['csqft']);
		
		$price= mysqli_real_escape_string($this->con,$_POST['price']);
		$de= mysqli_real_escape_string($this->con,$_POST['area']);
		$loc= mysqli_real_escape_string($this->con,$_POST['loc']);

 		$cre = date("Y-m-d H:i:s");  


		$house_1 = $_FILES['pic1']['name'];
		$tmp_name1 = $_FILES['pic1']['tmp_name'];

		$house_2 = $_FILES['pic2']['name'];
		$tmp_name2 = $_FILES['pic2']['tmp_name'];

		$house_3 = $_FILES['pic3']['name'];
		$tmp_name3 = $_FILES['pic3']['tmp_name'];

		$house_4 = $_FILES['pic4']['name'];
		$tmp_name4 = $_FILES['pic4']['tmp_name'];

		$house_5= $_FILES['pic5']['name'];
		$tmp_name5 = $_FILES['pic5']['tmp_name'];


		$path1 =rand(10000,10000000000);

		$final_path1=$path1.$house_1;
		$final_path2=$path1.$house_2;
		$final_path3=$path1.$house_3;
		$final_path4=$path1.$house_4;
		$final_path5=$path1.$house_5;

		$query=mysqli_query($this->con,"INSERT INTO house VALUES('','1','Eazy Rent','0703157610','EazyRent Ltd','0778316724','eazyrent256@gmail.com','$final_path1','$final_path2','$final_path3','$final_path4','$final_path5','$nem','$price','$de','$loc','0.00','0.00','$loc','0','0','$fun','$cons','$bs','$sq','0','0','Yes','$cre','$cre','No','Warehouses','$path1')");
		if($query){

       move_uploaded_file($tmp_name1,"../../api/owner/mage1/$final_path1");
       move_uploaded_file($tmp_name2,"../../api/owner/mage2/$final_path2");
       move_uploaded_file($tmp_name3,"../../api/owner/mage3/$final_path3");
       move_uploaded_file($tmp_name4,"../../api/owner/mage4/$final_path4");
       move_uploaded_file($tmp_name5,"../../api/owner/mage5/$final_path5");
       echo "warehouse added";
			 header("Location:addWare.php");

    }

	}

//get warehouse
	public function getWare(){

		$apart="";
		$query=mysqli_query($this->con,"SELECT * FROM house WHERE user_id='1' AND type='Warehouses'");
			$i = 0;
		while ($row=mysqli_fetch_array($query)) {
			$id=$row['ID'];
			$uid=$row['user_id'];
			$own=$row['owner'];
			$fon=$row['phone'];
			$biz=$row['bizname'];
			$fon2=$row['num'];
			$mail=$row['mail'];
			$im1=$row['image1'];
			$im2=$row['image2'];
			$im3=$row['image3'];
			$im4=$row['image4'];
			$im5=$row['image5'];
			$tit=$row['title'];
			$pr=$row['price'];
			$de=$row['descc'];
			$ad=$row['adu'];
			$lat=$row['lat'];
			$lon=$row['lon'];
			$place=$row['place'];
			$bed=$row['bed'];
			$bath=$row['bath'];
			$fun=$row['fun'];
			$con=$row['con'];
			$bs=$row['bsqft'];
			$cs=$row['csqft'];
			$flo=$row['floors'];
			$kit=$row['kitchen'];
			$paid=$row['paid'];
			$start=$row['start'];
			$end=$row['end'];
			$blok=$row['blocked'];
			$ty=$row['type'];
			$proid=$row['pro_id'];
			$i++;

			$apart .= "

				<tr>
                    
                <td>$i</td>
                 <td><img src='../../api/owner/mage1/$im1' alt='' style='width:40px;height:40px'></td>    
              <td>$tit</td>
             
              <td><a href='editWare.php?proid=$id' class='btn btn-outline-success'>Edit</a></td>

              <td><a href='del_ware.php?proid=$id' class='btn btn-outline-danger'>Delete</a></td>
             
              
                
            </tr>
			";
			// code...
		}


		return $apart;

	}

//edit warehouse
	public function editWare($nem,$bed,$cons,$bs,$sq,$price,$de,$loc,$id){

		$nem= mysqli_real_escape_string($this->con,$_POST['name']);
		
		$fun= mysqli_real_escape_string($this->con,$_POST['fun']);
		$cons= mysqli_real_escape_string($this->con,$_POST['cons']);
		$bs= mysqli_real_escape_string($this->con,$_POST['bsft']);
		$sq= mysqli_real_escape_string($this->con,$_POST['csqft']);
		;
		$price= mysqli_real_escape_string($this->con,$_POST['price']);
		$de= mysqli_real_escape_string($this->con,$_POST['area']);
		$loc= mysqli_real_escape_string($this->con,$_POST['loc']);
		$id = mysqli_real_escape_string($this->con, $id);

		$query=mysqli_query($this->con,"update house set title='$nem', price='$price',descc='$de',adu='$loc',place='$loc',fun='$fun',con='$cons',bsqft='$bs',csqft='$sq' where ID='$id'");

		if($query){

			 echo "warehouse edited";
			 header("Location:view_ware.php");
		}
	}


//delete ware
public function delWare($proid){

	$id=$_GET['proid'];


		$select="SELECT * FROM house WHERE ID='$id' ";
		$query=mysqli_query($this->con,$select);
		$data=mysqli_fetch_array($query);

		if($data['image1']){
			  unlink('../../api/owner/mage1/'.$data['image1']);
		}
		else if($data['image2']){
			  unlink('../../api/owner/mage2/'.$data['image2']);
		}
		else if($data['image3']){
			  unlink('../../api/owner/mage3/'.$data['image3']);
		}
		else if($data['image4']){
			  unlink('../../api/owner/mage4/'.$data['image4']);
		}
		else if($data['image5']){
			  unlink('../../api/owner/mage5/'.$data['image5']);
		}


		$del=mysqli_query($this->con,"DELETE  FROM house WHERE ID='$id'");

		if($del){


			echo "warehouse deleted";
			 header("Location:view_ware.php");
		}


}	



//add shop
	public function addShop($nem,$fun,$cons,$bs,$sq,$price,$de,$loc,$im1,$im2,
		$im3,$im4,$im5){

		

		$nem= mysqli_real_escape_string($this->con,$_POST['name']);
		
		$fun= mysqli_real_escape_string($this->con,$_POST['fun']);
		$cons= mysqli_real_escape_string($this->con,$_POST['cons']);
		$bs= mysqli_real_escape_string($this->con,$_POST['bsft']);
		$sq= mysqli_real_escape_string($this->con,$_POST['csqft']);
		
		$price= mysqli_real_escape_string($this->con,$_POST['price']);
		$de= mysqli_real_escape_string($this->con,$_POST['area']);
		$loc= mysqli_real_escape_string($this->con,$_POST['loc']);

 		$cre = date("Y-m-d H:i:s");  


		$house_1 = $_FILES['pic1']['name'];
		$tmp_name1 = $_FILES['pic1']['tmp_name'];

		$house_2 = $_FILES['pic2']['name'];
		$tmp_name2 = $_FILES['pic2']['tmp_name'];

		$house_3 = $_FILES['pic3']['name'];
		$tmp_name3 = $_FILES['pic3']['tmp_name'];

		$house_4 = $_FILES['pic4']['name'];
		$tmp_name4 = $_FILES['pic4']['tmp_name'];

		$house_5= $_FILES['pic5']['name'];
		$tmp_name5 = $_FILES['pic5']['tmp_name'];


		$path1 =rand(10000,10000000000);

		$final_path1=$path1.$house_1;
		$final_path2=$path1.$house_2;
		$final_path3=$path1.$house_3;
		$final_path4=$path1.$house_4;
		$final_path5=$path1.$house_5;

		$query=mysqli_query($this->con,"INSERT INTO house VALUES('','1','Eazy Rent','0703157610','EazyRent Ltd','0778316724','eazyrent256@gmail.com','$final_path1','$final_path2','$final_path3','$final_path4','$final_path5','$nem','$price','$de','$loc','0.00','0.00','$loc','0','0','$fun','$cons','$bs','$sq','0','0','Yes','$cre','$cre','No','Shops','$path1')");
		if($query){

       move_uploaded_file($tmp_name1,"../../api/owner/mage1/$final_path1");
       move_uploaded_file($tmp_name2,"../../api/owner/mage2/$final_path2");
       move_uploaded_file($tmp_name3,"../../api/owner/mage3/$final_path3");
       move_uploaded_file($tmp_name4,"../../api/owner/mage4/$final_path4");
       move_uploaded_file($tmp_name5,"../../api/owner/mage5/$final_path5");
       echo "added added";
			 header("Location:addShop.php");

    }

	}

//get shop
	public function getShop(){

		$apart="";
		$query=mysqli_query($this->con,"SELECT * FROM house WHERE user_id='1' AND type='Shops'");
			$i = 0;
		while ($row=mysqli_fetch_array($query)) {
			$id=$row['ID'];
			$uid=$row['user_id'];
			$own=$row['owner'];
			$fon=$row['phone'];
			$biz=$row['bizname'];
			$fon2=$row['num'];
			$mail=$row['mail'];
			$im1=$row['image1'];
			$im2=$row['image2'];
			$im3=$row['image3'];
			$im4=$row['image4'];
			$im5=$row['image5'];
			$tit=$row['title'];
			$pr=$row['price'];
			$de=$row['descc'];
			$ad=$row['adu'];
			$lat=$row['lat'];
			$lon=$row['lon'];
			$place=$row['place'];
			$bed=$row['bed'];
			$bath=$row['bath'];
			$fun=$row['fun'];
			$con=$row['con'];
			$bs=$row['bsqft'];
			$cs=$row['csqft'];
			$flo=$row['floors'];
			$kit=$row['kitchen'];
			$paid=$row['paid'];
			$start=$row['start'];
			$end=$row['end'];
			$blok=$row['blocked'];
			$ty=$row['type'];
			$proid=$row['pro_id'];
			$i++;

			$apart .= "

				<tr>
                    
                <td>$i</td>
                 <td><img src='../../api/owner/mage1/$im1' alt='' style='width:40px;height:40px'></td>    
              <td>$tit</td>
             
              <td><a href='editShop.php?proid=$id' class='btn btn-outline-success'>Edit</a></td>

              <td><a href='del_shop.php?proid=$id' class='btn btn-outline-danger'>Delete</a></td>
             
              
                
            </tr>
			";
			// code...
		}


		return $apart;

	}

//edit shop
	public function editShop($nem,$bed,$cons,$bs,$sq,$price,$de,$loc,$id){

		$nem= mysqli_real_escape_string($this->con,$_POST['name']);
		
		$fun= mysqli_real_escape_string($this->con,$_POST['fun']);
		$cons= mysqli_real_escape_string($this->con,$_POST['cons']);
		$bs= mysqli_real_escape_string($this->con,$_POST['bsft']);
		$sq= mysqli_real_escape_string($this->con,$_POST['csqft']);
		;
		$price= mysqli_real_escape_string($this->con,$_POST['price']);
		$de= mysqli_real_escape_string($this->con,$_POST['area']);
		$loc= mysqli_real_escape_string($this->con,$_POST['loc']);
		$id = mysqli_real_escape_string($this->con, $id);

		$query=mysqli_query($this->con,"update house set title='$nem', price='$price',descc='$de',adu='$loc',place='$loc',fun='$fun',con='$cons',bsqft='$bs',csqft='$sq' where ID='$id'");

		if($query){

			 echo "shop edited";
			 header("Location:view_shop.php");
		}
	}



//delete shop
public function delShop($proid){

	$id=$_GET['proid'];


		$select="SELECT * FROM house WHERE ID='$id' ";
		$query=mysqli_query($this->con,$select);
		$data=mysqli_fetch_array($query);

		if($data['image1']){
			  unlink('../../api/owner/mage1/'.$data['image1']);
		}
		else if($data['image2']){
			  unlink('../../api/owner/mage2/'.$data['image2']);
		}
		else if($data['image3']){
			  unlink('../../api/owner/mage3/'.$data['image3']);
		}
		else if($data['image4']){
			  unlink('../../api/owner/mage4/'.$data['image4']);
		}
		else if($data['image5']){
			  unlink('../../api/owner/mage5/'.$data['image5']);
		}


		$del=mysqli_query($this->con,"DELETE  FROM house WHERE ID='$id'");

		if($del){


			echo "deleted deleted";
			 header("Location:view_shop.php");
		}


}	



	public function addCart($nem,$im){


		$nem = mysqli_real_escape_string($this->con,$_POST['name']);

		$tmp_name1 = $_FILES['pic']['tmp_name'];
		$path1 =rand(10000,10000000000);
		$final_path1=$path1.$im;

		$cat=mysqli_query($this->con,"INSERT INTO category VALUES('','$nem','$final_path1')");

		if($cat){
		move_uploaded_file($tmp_name1,"../../api/owner/category/$final_path1");
			echo "category added";
			 header("Location:addCat.php");

		}
	}




	public function getCat(){


		$ko="";

		$edit=mysqli_query($this->con,"SELECT * FROM category");

		$i = 0;
		while ($row=mysqli_fetch_array($edit)) {

			$id=$row['id'];
			$meg=$row['pic'];
			$nem=$row['name'];
			$i++;

			$ko .="

				
			<tr>
                    
                <td>$i</td>
                 <td><img src='../../api/owner/category/$meg' alt='' style='width:40px;height:40px'></td>    
              <td>$nem</td>
             
              <td><a href='editCat.php?catid=$id' class='btn btn-outline-success'>Edit</a></td>

              <td><a href='del_cat.php?catid=$id' class='btn btn-outline-danger'>Delete</a></td>
             
              
                
            </tr>

			";


		}



		return $ko;


	}




	public function editCart($nem,$cat){

		$nem = mysqli_real_escape_string($this->con,$_POST['name']);
		$cat=$_GET['catid'];

		$edit=mysqli_query($this->con,"UPDATE category SET name='$nem' WHERE id='$cat'");

		if($edit){


			echo "category edited";
			 header("Location:view_cat.php");
		}

	}





	



	public function delCat($id){

	$id=$_GET['catid'];


		$select="SELECT * FROM category where id='$id' ";
		$query=mysqli_query($this->con,$select);
		$data=mysqli_fetch_array($query);

		if($data['pic']){
			  unlink('../../api/owner/category/'.$data['pic']);
		}



		$del=mysqli_query($this->con,"DELETE  FROM category WHERE id='$id'");

		if($del){


			echo "category deleted";
			 header("Location:view_cat.php");
		}
	}





}




?>