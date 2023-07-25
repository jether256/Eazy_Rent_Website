<?php

class MyProperty{

	private $con;
	private $user_obj;
	private $biz_obj;

	public function __construct($con,$user){
		$this->con=$con;
		$this->user_obj= new User($con,$user);
		$this->biz_obj= new Business($con,$user);;
	}




		public function getButtons(){

			$uid=$this->user_obj->getUID();
			$all="";

			$zo=mysqli_query($this->con,"SELECT * FROM business WHERE user_id='$uid'");
			$query=mysqli_num_rows($zo);
			if($query==1){


					$all .= "
  						<li><a href='post_property.php'>post property<i class='fas fa-paper-plane'></i></a></li>
					";
			}else{

					$all .="
 				<li><a href='regBiz.php'>register Business<i class='fas fa-paper-plane'></i></a></li>
					";

			}

			return $all;

		}



	public function postProperty($nem,$price,$add,$offer,$conn,$fun,$bed,$bath,$flo,$kit,$pro_s,$cap_s,$desc,$im1,$im2,$im3,$im4,$im5){

			$uid=$this->user_obj->getUID();
			$owner=$this->user_obj->getUsername();

			$biznem=$this->biz_obj->getBusinessName();
			$biz4ne=$this->biz_obj->getBusinessPhone();
			$bizmail=$this->biz_obj->getBusinessEmail();

			$pronem = mysqli_real_escape_string($this->con, $nem);
			$price = mysqli_real_escape_string($this->con, $price);
			$add = mysqli_real_escape_string($this->con, $add);
			$offer = mysqli_real_escape_string($this->con, $offer);
			$conn = mysqli_real_escape_string($this->con, $conn);
			$fun = mysqli_real_escape_string($this->con, $fun);
			$bed = mysqli_real_escape_string($this->con, $bed);
			$bath = mysqli_real_escape_string($this->con, $bath);
			$flo = mysqli_real_escape_string($this->con, $flo);
			$kit = mysqli_real_escape_string($this->con, $kit);
			$pro_s = mysqli_real_escape_string($this->con, $pro_s);
			$cap_s = mysqli_real_escape_string($this->con, $cap_s);
			$desc = mysqli_real_escape_string($this->con, $desc);


			$cre = date("Y-m-d H:i:s");  
			$time=time();

			$tmp_name1 = $_FILES['img_o1']['tmp_name'];
			$tmp_name2 = $_FILES['img_o2']['tmp_name'];
			$tmp_name3 = $_FILES['img_o3']['tmp_name'];
			$tmp_name4 = $_FILES['img_o4']['tmp_name'];
			$tmp_name5 = $_FILES['img_o5']['tmp_name'];
	

			$path1 =rand(10000,10000000000);
			

			$final_path1=$path1.$im1;
			$final_path2=$path1.$im2;
			$final_path3=$path1.$im3;
			$final_path4=$path1.$im4;
			$final_path5=$path1.$im5;
			


				$insert=mysqli_query($this->con,"INSERT INTO house VALUES('','$uid','$owner','$biz4ne','$biznem','$biz4ne','$bizmail','$final_path1','$final_path2','$final_path3','$final_path4','$final_path5','$pronem','$price','$desc','$add','0','0','$add','$bed','$bath','$fun','$conn','$pro_s','$cap_s','$flo','$kit','Yes','$cre','$cre','Yes','$offer','$path1')");

			if($insert){

	

			move_uploaded_file($tmp_name1,"api/owner/mage1/$final_path1");
	       move_uploaded_file($tmp_name2,"api/owner/mage2/$final_path2");
	       move_uploaded_file($tmp_name3,"api/owner/mage3/$final_path3");
	       move_uploaded_file($tmp_name4,"api/owner/mage4/$final_path4");
	       move_uploaded_file($tmp_name5,"api/owner/mage5/$final_path5");



	       $success_msg[]='Property posted!';

	        header("Location:index.php");
			}
		
	}



	public function allMyProperties(){

		$uid=$this->biz_obj->getBuisnesUID();

		$all="";

		$query=mysqli_query($this->con,"SELECT * FROM house WHERE user_id='$uid' ORDER BY ID DESC");
		while ($row=mysqli_fetch_array($query)) {
			$id=$row['ID'];
			$uid=$row['user_id'];
			$owner=$row['owner'];
			$phon=$row['phone'];
			$biznem=$row['bizname'];
			$num=$row['num'];
			$mail=$row['mail'];
			$im1=$row['image1'];
			$im2=$row['image2'];
			$im3=$row['image3'];
			$im4=$row['image4'];
			$im5=$row['image5'];
			$tit=$row['title'];
			$price=$row['price'];
			$desc=$row['descc'];
			$adu=$row['adu'];
			$lat=$row['lat'];
			$lon=$row['lon'];
			$place=$row['place'];
			$bed=$row['bed'];
			$bath=$row['bath'];
			$fun=$row['fun'];
			$con=$row['con'];
			$bsft=$row['bsqft'];
			$csft=$row['csqft'];
			$floors=$row['floors'];
			$kit=$row['kitchen'];
			$paid=$row['paid'];
			$start=$row['start'];
			$end=$row['end'];
			$blocked=$row['blocked'];
			$type=$row['type'];
			$pro_id=$row['pro_id'];


			$all .= "


	<div class='box'>
         <div class='thumb'>
            <p class='total-images'><i class='far fa-image;'></i><span>4</span></p>
            <p class='type'><span>$type</span></p>
  
            <img src='api/owner/mage1/$im1' alt=''>
         </div>
         <h3 class='name'>$tit</h3>
         <p class='location'><i class='fas fa-map-marker-alt'></i><span>$place</span></p>
         <div class='flex'>
            <p><i class='fas fa-bed'></i><span>$bed</span></p>
            <p><i class='fas fa-bath'></i><span>$bath</span></p>
            <p><i class='fas fa-maximize'></i><span>$bsft</span></p>
         </div>
         <a href='update_my_property.php?proid=$id' class='btn'>update property</a>
         <input type='submit' name='submit' value='delete' class='btn' onclick='return confirm('delete this listings?');'>
         <a href='mylistings_details.php?proid=$id' class='btn'>view property</a>
      </div>





		
			";
			// code...
		}


		return $all;


	}




public function getMyPropertyDetails($proid){

		$id=$proid;
		$detail="";

		$query=mysqli_query($this->con,"SELECT * FROM house WHERE ID='$id'");
		while ($row=mysqli_fetch_array($query)) {
			$id=$row['ID'];
			$uid=$row['user_id'];
			$owner=$row['owner'];
			$phon=$row['phone'];
			$biznem=$row['bizname'];
			$num=$row['num'];
			$mail=$row['mail'];
			$im1=$row['image1'];
			$im2=$row['image2'];
			$im3=$row['image3'];
			$im4=$row['image4'];
			$im5=$row['image5'];
			$tit=$row['title'];
			$price=$row['price'];
			$desc=$row['descc'];
			$adu=$row['adu'];
			$lat=$row['lat'];
			$lon=$row['lon'];
			$place=$row['place'];
			$bed=$row['bed'];
			$bath=$row['bath'];
			$fun=$row['fun'];
			$con=$row['con'];
			$bsft=$row['bsqft'];
			$csft=$row['csqft'];
			$floors=$row['floors'];
			$kit=$row['kitchen'];
			$paid=$row['paid'];
			$start=$row['start'];
			$end=$row['end'];
			$blocked=$row['blocked'];
			$type=$row['type'];
			$pro_id=$row['pro_id'];


			$detail .= "

			<div class='details'>
      <div class='thumb'>
         <div class='big-image'>
            <img src='api/owner/mage1/$im1' alt=''>
         </div>
         <div class='small-images'>
            <img src='api/owner/mage1/$im1' alt=''>
            <img src='api/owner/mage2/$im2' alt=''>
            <img src='api/owner/mage3/$im3' alt=''>
            <img src='api/owner/mage4/$im4' alt=''>
            <img src='api/owner/mage5/$im5' alt=''>
         </div>
      </div>
      <h3 class='name'>$tit</h3>
      <p class='location'><i class='fas fa-map-marker-alt'></i><span>$place</span></p>
      
        	<p class='location'><i class='fas fa-user'></i><span>
        $owner
        </span></p>
        
       <div class='info'>

        		<p><i class='fas fa-money-bill-alt'></i><span>
          $price
          </span></p>

            <p><i class='fab fa-whatsapp'></i><a href='https://wa.me/$num?text=Hi,\n I want to enquire about $tit property of property ID $pro_id'>
          whatsapp
          </a></p>



          <p><i class='fas fa-phone'></i><a href='tel:<?php echo $phon?>'>
          $phon
          </a></p>


          <p><i class='fas fa-house'></i><span>
          $type
          </span></p>


          <p><i class='fas fa-calendar'></i><span>
          $start
          </span></p>



        </div>
      
      
      <h3 class='title'>details</h3>
      <div class='flex'>
         <div class='box'>
           <p><i>Construction status: </i><span>$con</span></p>

          <p><i>Furnishing: </i><span>$fun</span></p>

          <p><i>Bedrooms: </i><span>$bed</span></p>

          <p><i>Bathrooms: </i><span>$bath</span></p>

         </div>
         <div class='box'>
            
          <p><i>Floors: </i><span>$floors</span></p>

          <p><i>Kitchen: </i><span>$kit</span></p>

          <p><i>status: </i><span>$fun</span></p>

          <p><i>status: </i><span>$fun</span></p>
         </div>
      </div>
      
      <h3 class='title'>description</h3>
      <p class='description'>$desc</p>
      
   </div>


			";
			// code...
		}


		return $detail;
	}




// public function getMyPropertyDetails($proid){

// 		$id=$proid;
// 		$detail="";

// 		$query=mysqli_query($this->con,"SELECT * FROM house WHERE ID='$id'");
// 		while ($row=mysqli_fetch_array($query)) {
// 			$id=$row['ID'];
// 			$uid=$row['user_id'];
// 			$owner=$row['owner'];
// 			$phon=$row['phone'];
// 			$biznem=$row['bizname'];
// 			$num=$row['num'];
// 			$mail=$row['mail'];
// 			$im1=$row['image1'];
// 			$im2=$row['image2'];
// 			$im3=$row['image3'];
// 			$im4=$row['image4'];
// 			$im5=$row['image5'];
// 			$tit=$row['title'];
// 			$price=$row['price'];
// 			$desc=$row['descc'];
// 			$adu=$row['adu'];
// 			$lat=$row['lat'];
// 			$lon=$row['lon'];
// 			$place=$row['place'];
// 			$bed=$row['bed'];
// 			$bath=$row['bath'];
// 			$fun=$row['fun'];
// 			$con=$row['con'];
// 			$bsft=$row['bsqft'];
// 			$csft=$row['csqft'];
// 			$floors=$row['floors'];
// 			$kit=$row['kitchen'];
// 			$paid=$row['paid'];
// 			$start=$row['start'];
// 			$end=$row['end'];
// 			$blocked=$row['blocked'];
// 			$type=$row['type'];
// 			$pro_id=$row['pro_id'];


// 			$detail .= "

// 			<div class='details'>
//       <div class='thumb'>
//          <div class='big-image'>
//             <img src='api/owner/mage1/$im1' alt=''>
//          </div>
//          <div class='small-images'>
//             <img src='api/owner/mage1/$im1' alt=''>
//             <img src='api/owner/mage1/$im2' alt=''>
//             <img src='api/owner/mage1/$im3' alt=''>
//             <img src='api/owner/mage1/$im4' alt=''>
//          </div>
//       </div>
//       <h3 class='name'>$tit</h3>
//       <p class='location'><i class='fas fa-map-marker-alt'></i><span>$place</span></p>
//       <div class='info'>
//          <p><i class='fas fa-tag'></i><span>$price</span></p>
//          <p><i class='fas fa-user'></i><span>$owner</span></p>
//          <p><i class='fas fa-phone'></i><a href='tel:$phon'>$phon</a></p>
//          <p><i class='fas fa-building'></i><span>$type</span></p>
//          <p><i class='fas fa-calendar'></i><span>$start</span></p>
//       </div>
//       <h3 class='title'>details</h3>
//       <div class='flex'>
//          <div class='box'>
//             <p><i>rooms :</i><span>2 BHK</span></p>
//             <p><i>deposit amount :</i><span>0</span></p>
//             <p><i>status :</i><span>ready to move</span></p>
//             <p><i>bedroom :</i><span>$bed</span></p>
//             <p><i>bathroom :</i><span>$bath</span></p>
//             <p><i>balcony :</i><span>1</span></p>
//          </div>
//          <div class='bo'>
//             <p><i>carpet area :</i><span>$csft</span></p>
//             <p><i>age :</i><span>3 years</span></p>
//             <p><i>room floor :</i><span>$floors</span></p>
//             <p><i>total floors :</i><span>22</span></p>
//             <p><i>furnished :</i><span>semi-furnished</span></p>
//             <p><i>loan :</i><span>available</span></p>
//          </div>
//       </div>
//       <h3 class='title'>amenities</h3>
//       <div class='flex'>
//          <div class='box'>
//             <p><i class='fas fa-check'></i><span>lifts</span></p>
//             <p><i class='fas fa-check'></i><span>security guards</span></p>
//             <p><i class='fas fa-times'></i><span>play ground</span></p>
//             <p><i class='fas fa-check'></i><span>gardens</span></p>
//             <p><i class='fas fa-check'></i><span>water supply</span></p>
//             <p><i class='fas fa-check'></i><span>power backup</span></p>
//          </div>
//          <div class='box'>
//             <p><i class='fas fa-check'></i><span>parking area</span></p>
//             <p><i class='fas fa-times'></i><span>gym</span></p>
//             <p><i class='fas fa-check'></i><span>shopping mall</span></p>
//             <p><i class='fas fa-check'></i><span>hospital</span></p>
//             <p><i class='fas fa-check'></i><span>schools</span></p>
//             <p><i class='fas fa-check'></i><span>market area</span></p>
//          </div>
//       </div>
//       <h3 class='title'>description</h3>
//       <p class='description'>$desc</p>
//       <form action='' method='post'>
//          <input type='submit' value='save property' name='save' class='inline-btn'>
//       </form>
//    </div>


// 			";
// 			// code...
// 		}


// 		return $detail;
// 	}





public function deleteProperty($proid){

	$id=mysqli_real_escape_string($this->con,$proid);


	$delete=mysqli_query($this->con,"select * from house where ID='$id'");
	$del_query=mysqli_fetch_array($delete);
	if($del_query['image1']){
    unlink('../../api/owner/mage1/'.$del_query['image1']);
}

else if($del_query['image2']){
    unlink('../../api/owner/mage2/'.$del_query['image2']);
}

else if($del_query['image3']){
    unlink('../../api/owner/mage3/'.$del_query['image3']);
}

else if($del_query['image4']){
    unlink('../../api/owner/mage4/'.$del_query['image4']);
}

else if($del_query['image5']){
    unlink('../../api/owner/mage5/'.$del_query['image5']);
}


$con_d=mysqli_query($this->con,"delete * from house where ID='$id'");

if($con_d){

	      $success_msg[]='Property deleted successfully!';
}

}


public function  upDateProperty($nem,$price,$add,$offer,$conn,$fun,$bed,$bath,$flo,$kit,$pro_s,$cap_s,$desc,$im1,$im2,$im3,$im4,$im5,$proid){


			$pronem = mysqli_real_escape_string($this->con, $nem);
			$price = mysqli_real_escape_string($this->con, $price);
			$add = mysqli_real_escape_string($this->con, $add);
			$offer = mysqli_real_escape_string($this->con, $offer);
			$conn = mysqli_real_escape_string($this->con, $conn);
			$fun = mysqli_real_escape_string($this->con, $fun);
			$bed = mysqli_real_escape_string($this->con, $bed);
			$bath = mysqli_real_escape_string($this->con, $bath);
			$flo = mysqli_real_escape_string($this->con, $flo);
			$kit = mysqli_real_escape_string($this->con, $kit);
			$pro_s = mysqli_real_escape_string($this->con, $pro_s);
			$cap_s = mysqli_real_escape_string($this->con, $cap_s);
			$desc = mysqli_real_escape_string($this->con, $desc);


			$cre = date("Y-m-d H:i:s");  
			$time=time();

			$tmp_name1 = $_FILES['img_o1']['tmp_name'];
			$tmp_name2 = $_FILES['img_o2']['tmp_name'];
			$tmp_name3 = $_FILES['img_o3']['tmp_name'];
			$tmp_name4 = $_FILES['img_o4']['tmp_name'];
			$tmp_name5 = $_FILES['img_o5']['tmp_name'];
	

			$path1 =rand(10000,10000000000);
			

			$final_path1=$path1.$im1;
			$final_path2=$path1.$im2;
			$final_path3=$path1.$im3;
			$final_path4=$path1.$im4;
			$final_path5=$path1.$im5;



			$update=mysqli_query($this->con,"update house set image1='$final_path1',image2='$final_path2',image3='$final_path3',image4='$final_path4',image5='$final_path5',title='$pronem',price='$price',descc='$desc',adu='$add',place='$add',bed='$bed',bath='$bath',fun='$fun',con='$conn',bsqft='$pro_s',csqft='$cap_s',floors='$flo',kitchen='$kit',type='$offer' where ID='$proid'");


			if ($update) {



			move_uploaded_file($tmp_name1,"api/owner/mage1/$final_path1");
	       move_uploaded_file($tmp_name2,"api/owner/mage2/$final_path2");
	       move_uploaded_file($tmp_name3,"api/owner/mage3/$final_path3");
	       move_uploaded_file($tmp_name4,"api/owner/mage4/$final_path4");
	       move_uploaded_file($tmp_name5,"api/owner/mage5/$final_path5");



	       $success_msg[]='Property updated successfully!';

	        header("update_my_property:index.php");
				// code...
			}


}








}

?>