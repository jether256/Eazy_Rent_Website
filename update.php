<?php
include("includes/header.php");
//require 'includes/form_handlers/profile_handler.php';


if (isset($_SESSION['id'])) {
   $userLoggedIn = $_SESSION['id'];
   $user_details_query = mysqli_query($con, "SELECT * FROM users WHERE id='$userLoggedIn'");
   $user = mysqli_fetch_array($user_details_query);
}
else {

header("Location:index.php");

}


if(isset($_POST['submit'])){

   $proUp= new User($con,$userLoggedIn);
   $proUp->updateUser($_POST['name'],$_POST['email'],$_POST['phone'],$_POST['pass']);
  
   
}else{

   // $warning_msg[]='Something went wrong!';
}


?>

<!-- register section starts  -->

<section class="form-container">

   <form action="" method="post">
      <h3>update profile!</h3>
      <input type="text" name="name" required maxlength="50" value="<?php echo $user['name'];?>" class="box">
      <input type="email" name="email" required maxlength="50" value="<?php echo $user['email'];?>" class="box">
      <input type="password" name="pass" required maxlength="20" placeholder="new password" class="box">
      <input type="text" name="phone" required maxlength="20" value="<?php echo $user['phone'];?>" class="box">
      <input type="submit" value="Update Profile" name="submit" class="btn">
   </form>

</section>

<!-- register section ends -->

<!-- footer section starts  -->
<?php

include("includes/foooot.php");

?>
<!-- footer section ends --


<!-- custom js file link  -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script src="https://cdnjs.cloudfare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


<?php include 'includes/message.php';?>


<script src="assets/js/script.js"></script>

</body>
</html>