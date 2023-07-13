<?php

class Property{

	private $con;
	
	
	public function __construct($con){
		$this->con=$con;
	}


	public function getPropertiesRand(){

		$rando="";

		$query=mysqli_query($this->con,"SELECT * FROM house ORDER BY rand() LIMIT 8");
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


			$rando .= "


			<div class='box'>
         <div class='admin'>
            <h3>j</h3>
            <div>
               <p>$owner</p>
               <span>$start</span>
            </div>
         </div>
         <div class='thumb'>
            <p class='total-images'><i class='far fa-image;'></i><span>4</span></p>
            <p class='type'><span>$type</span></p>
            <form action='' method='post' class='save'>
               <button type='submit' name='save' class='far fa-heart'></button>
            </form>
            <img src='api/owner/mage1/$im1' atl='' style='width:20px;height:20px'>
         </div>
         <h3 class='name'>$tit</h3>
         <p class='location'><i class='fas fa-map-marker-alt'></i><span>$place</span></p>
         <div class='flex'>
            <p><i class='fas fa-bed'></i><span>$bed</span></p>
            <p><i class='fas fa-bath'></i><span>$bath</span></p>
            <p><i class='fas fa-maximize'></i><span>$bsft</span></p>
         </div>
         <a href='view_property.php?proid=$id' class='btn'>view property</a>
      </div>


			";
			// code...
		}


		return $rando;


	}



	public function allProperties(){

		$all="";

		$query=mysqli_query($this->con,"SELECT * FROM house ORDER BY ID DESC");
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
         <div class='admin'>
            <h3>j</h3>
            <div>
               <p>$owner</p>
               <span>$start</span>
            </div>
         </div>
         <div class='thumb'>
            <p class='total-images'><i class='far fa-image;'></i><span>4</span></p>
            <p class='type'><span>$type</span></p>
            <form action='' method='post' class='save'>
               <button type='submit' name='save' class='far fa-heart'></button>
            </form>
            <img src='api/owner/mage1/$im1' alt=''>
         </div>
         <h3 class='name'>$tit</h3>
         <p class='location'><i class='fas fa-map-marker-alt'></i><span>$place</span></p>
         <div class='flex'>
            <p><i class='fas fa-bed'></i><span>$bed</span></p>
            <p><i class='fas fa-bath'></i><span>$bath</span></p>
            <p><i class='fas fa-maximize'></i><span>$bsft</span></p>
         </div>
         <a href='view_property.php?proid=$id' class='btn'>view property</a>
      </div>


			";
			// code...
		}


		return $all;

	}



		public function searchProperty($loc,$offer,$bed,$min,$max){

			$loc=mysqli_real_escape_string($this->con,$loc);
			$offer=mysqli_real_escape_string($this->con,$offer);
			$bed=mysqli_real_escape_string($this->con,$bed);
			$min=mysqli_real_escape_string($this->con,$min);
			$max=mysqli_real_escape_string($this->con,$max);

				$detail="";

			$sear=mysqli_query($this->con,"SELECT * FROM house WHERE place LIKE '%$loc%' AND type LIKE '%$offer%' AND bed LIKE '%$bed%' AND price BETWEEN '$min' AND '$max' ORDER BY start DESC");

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
            <img src='api/owner/mage1/$im2' alt=''>
            <img src='api/owner/mage1/$im3' alt=''>
            <img src='api/owner/mage1/$im4' alt=''>
         </div>
      </div>
      <h3 class='name'>$tit</h3>
      <p class='location'><i class='fas fa-map-marker-alt'></i><span>$place</span></p>
      <div class='info'>
         <p><i class='fas fa-tag'></i><span>$price</span></p>
         <p><i class='fas fa-user'></i><span>$owner</span></p>
         <p><i class='fas fa-phone'></i><a href='tel:$phon'>$phon</a></p>
         <p><i class='fas fa-building'></i><span>$type</span></p>
         <p><i class='fas fa-calendar'></i><span>$start</span></p>
      </div>
      <h3 class='title'>details</h3>
      <div class='flex'>
         <div class='box'>
            <p><i>rooms :</i><span>2 BHK</span></p>
            <p><i>deposit amount :</i><span>0</span></p>
            <p><i>status :</i><span>ready to move</span></p>
            <p><i>bedroom :</i><span>$bed</span></p>
            <p><i>bathroom :</i><span>$bath</span></p>
            <p><i>balcony :</i><span>1</span></p>
         </div>
         <div class='bo'>
            <p><i>carpet area :</i><span>$csft</span></p>
            <p><i>age :</i><span>3 years</span></p>
            <p><i>room floor :</i><span>$floors</span></p>
            <p><i>total floors :</i><span>22</span></p>
            <p><i>furnished :</i><span>semi-furnished</span></p>
            <p><i>loan :</i><span>available</span></p>
         </div>
      </div>
      <h3 class='title'>amenities</h3>
      <div class='flex'>
         <div class='box'>
            <p><i class='fas fa-check'></i><span>lifts</span></p>
            <p><i class='fas fa-check'></i><span>security guards</span></p>
            <p><i class='fas fa-times'></i><span>play ground</span></p>
            <p><i class='fas fa-check'></i><span>gardens</span></p>
            <p><i class='fas fa-check'></i><span>water supply</span></p>
            <p><i class='fas fa-check'></i><span>power backup</span></p>
         </div>
         <div class='box'>
            <p><i class='fas fa-check'></i><span>parking area</span></p>
            <p><i class='fas fa-times'></i><span>gym</span></p>
            <p><i class='fas fa-check'></i><span>shopping mall</span></p>
            <p><i class='fas fa-check'></i><span>hospital</span></p>
            <p><i class='fas fa-check'></i><span>schools</span></p>
            <p><i class='fas fa-check'></i><span>market area</span></p>
         </div>
      </div>
      <h3 class='title'>description</h3>
      <p class='description'>$desc</p>
      <form action='' method='post'>
         <input type='submit' value='save property' name='save' class='inline-btn'>
      </form>
   </div>


			";
			// code...
			}


		return $detail;

		}



	public function getPropertyDetails($proid){

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
            <img src='api/owner/mage1/$im2' alt=''>
            <img src='api/owner/mage1/$im3' alt=''>
            <img src='api/owner/mage1/$im4' alt=''>
         </div>
      </div>
      <h3 class='name'>$tit</h3>
      <p class='location'><i class='fas fa-map-marker-alt'></i><span>$place</span></p>
      <div class='info'>
         <p><i class='fas fa-tag'></i><span>$price</span></p>
         <p><i class='fas fa-user'></i><span>$owner</span></p>
         <p><i class='fas fa-phone'></i><a href='tel:$phon'>$phon</a></p>
         <p><i class='fas fa-building'></i><span>$type</span></p>
         <p><i class='fas fa-calendar'></i><span>$start</span></p>
      </div>
      <h3 class='title'>details</h3>
      <div class='flex'>
         <div class='box'>
            <p><i>rooms :</i><span>2 BHK</span></p>
            <p><i>deposit amount :</i><span>0</span></p>
            <p><i>status :</i><span>ready to move</span></p>
            <p><i>bedroom :</i><span>$bed</span></p>
            <p><i>bathroom :</i><span>$bath</span></p>
            <p><i>balcony :</i><span>1</span></p>
         </div>
         <div class='bo'>
            <p><i>carpet area :</i><span>$csft</span></p>
            <p><i>age :</i><span>3 years</span></p>
            <p><i>room floor :</i><span>$floors</span></p>
            <p><i>total floors :</i><span>22</span></p>
            <p><i>furnished :</i><span>semi-furnished</span></p>
            <p><i>loan :</i><span>available</span></p>
         </div>
      </div>
      <h3 class='title'>amenities</h3>
      <div class='flex'>
         <div class='box'>
            <p><i class='fas fa-check'></i><span>lifts</span></p>
            <p><i class='fas fa-check'></i><span>security guards</span></p>
            <p><i class='fas fa-times'></i><span>play ground</span></p>
            <p><i class='fas fa-check'></i><span>gardens</span></p>
            <p><i class='fas fa-check'></i><span>water supply</span></p>
            <p><i class='fas fa-check'></i><span>power backup</span></p>
         </div>
         <div class='box'>
            <p><i class='fas fa-check'></i><span>parking area</span></p>
            <p><i class='fas fa-times'></i><span>gym</span></p>
            <p><i class='fas fa-check'></i><span>shopping mall</span></p>
            <p><i class='fas fa-check'></i><span>hospital</span></p>
            <p><i class='fas fa-check'></i><span>schools</span></p>
            <p><i class='fas fa-check'></i><span>market area</span></p>
         </div>
      </div>
      <h3 class='title'>description</h3>
      <p class='description'>$desc</p>
      <form action='' method='post'>
         <input type='submit' value='save property' name='save' class='inline-btn'>
      </form>
   </div>


			";
			// code...
		}


		return $detail;
	}



}





?>