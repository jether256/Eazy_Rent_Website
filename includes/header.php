
<?php

include 'config/config.php';
include 'includes/classes/User.php';
include 'includes/classes/Business.php';
include 'includes/classes/MyProperty.php';
include 'includes/classes/Property.php';

include 'includes/classes/Contact.php';
include 'includes/classes/Unique.php';

if (isset($_SESSION['id'])) {

   $userLoggedIn = $_SESSION['id'];

   $user_details_query = mysqli_query($con, "SELECT * FROM users WHERE id='$userLoggedIn'");
   $user = mysqli_fetch_array($user_details_query);
}
else {


$userLoggedIn='';

}


if (isset($_SESSION['id'])) {

   $ownerREg= $_SESSION['id'];

  $biz_details_query = mysqli_query($con, "SELECT * FROM business WHERE user_id='$userLoggedIn'");
   $biz= mysqli_fetch_array($biz_details_query);
}
else {


$userLoggedIn='';

}






if (isset($_SESSION['type'])) {

   $type = $_SESSION['type'];

  
}
else {


$type='';

}




?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>
   
    <link href="assets/images/logo/loo.png" rel="icon">
    
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="assets/css/style.css">

 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
   

</head>
<body>
   
<!-- header section starts  -->

<!-- header section starts  -->

<header class="header">

    <nav class="navbar nav-1">
      <section class="flex">
         <a href="index.php" class="logo"><img src="assets/images/logo/loo.png" height="40px" width="100px" ></a>

         <ul>





               <?php if(($type == "owner" ) && ($user['status']=="verified")){


                  $but= new MyProperty($con,$userLoggedIn);
                  echo $but->getButtons();


                 } ?>



         </ul>
      </section>
   </nav>

   <nav class="navbar nav-2">
      <section class="flex">
         <div id="menu-btn" class="fas fa-bars"></div>

         <div class="menu">
            <ul>
          
              
               <li><a href="index.php">Home</a></li>


                <?php if($type == "owner" ) {?>


   
               <li><a href="mylistings.php">My Listings<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a>My Listings</a></li>
                     
                  </ul>
               </li>

               <?php } ?>

               <?php if($type == "user" ) {?>
               <li><a href='#'>Property<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a>Rentals</a></li>
							<li><a>Apartments</a></li>
							<li><a>Bangalows</a></li>
							<li><a>Hostels</a></li>
							<li><a>Office Space</a></li>
							<li><a>Land</a></li>
							<li><a>Ware Houses</a></li>
							<li><a>Tourist B & B</a></li>
                  </ul>
               </li>
                 <?php } ?>
               	  <li><a href="contact.php">Contact Us</a></li>
               	  <li><a href="about.php">About Us</a></li>
                    <?php if($type == "user" ) {?>
               	  <li><a href="#">Saved <i class="far fa-heart"></i></a></li>
                    <?php } ?>
            	<li><a href="#">Account <i class="fas fa-angle-down"></i></a>
            	<ul>



                 <?php if ($userLoggedIn == null) {?>

                  <li><a href="login.php">Login</a></li>
                  <li><a href="register.php">Register</a></li>
                    <?php } ?>

               <?php if (strlen($userLoggedIn != null)) {?>

                  <li><a href="update.php">Update profile</a></li>
                  <li><a href="regBiz.php">Register Business</a></li>
                  <li><a href="changepass.php">Change password</a></li>
                  <li><a href="includes/handlers/logout.php">Logout</a></li>
                     <?php } ?>

                 
            	  <!--  <li><a href="login.php">Login</a></li>
                  <li><a href="register.php">Register</a></li>  -->
            	    
            	</ul>
            	
              
            

           
            </ul>
         </div>

      </section>
   </nav>

</header>

<!-- header section ends -->


