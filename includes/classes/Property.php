<?php

class Property{

	private $con;
	
	
	public function __construct($con){
		$this->con=$con;
	}


	public function getCategory(){

		$cato="";

		$query=mysqli_query($this->con,"SELECT * FROM category");
		while ($row=mysqli_fetch_array($query)) {
			$id=$row['id'];
			$nem=$row['name'];
			$pic=$row['pic'];


			$cato .="

		<div class='box'>
			
			<a href='view_cat_prop.php?proid=$nem'><img src='api/owner/category/$pic' alt=''></a>
		
         <a href='view_cat_prop.php?proid=$nem'><h3>$nem</h3></a>
      </div>

			";

			// code...
		}


		return $cato;

	}


	public function catPro($proid){


		$nem=$proid;

		$prodo="";

		$query=mysqli_query($this->con,"SELECT * FROM house WHERE type='$nem'");
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

			$prodo .= "

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

		return $prodo;
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
            <img src='api/owner/mage1/$im1' atl='' >
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

			while ($row=mysqli_fetch_array($sear)) {

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
            <img src='api/owner/mage1/$im1' atl='' >
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



	public function getTopRand(){

		$cato="";

		$query=mysqli_query($this->con,"SELECT * FROM business");
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


			$cato .="

		<div class='box'>
			
			<a href='biz_listings.php?bizid=$biz'><img src='api/owner/logo/$logo' alt=''></a>
		
         <a href='biz_listings.php?bizid=$biz'><h3>$biz</h3></a>
      </div>

			";

			// code...
		}


		return $cato;

	}


	public function getBizAll($proid){

		$id=$proid;

		$all="";

		$query=mysqli_query($this->con,"SELECT * FROM house WHERE bizname='$id'");
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










}



	



?>