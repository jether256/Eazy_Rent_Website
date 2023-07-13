<?php
include("includes/header.php");


if (isset($_SESSION['id'])) {

   $userLoggedIn = $_SESSION['id'];

   $user_details_query = mysqli_query($con, "SELECT * FROM users WHERE id='$userLoggedIn'");
   $user = mysqli_fetch_array($user_details_query);
}
else {


$userLoggedIn='';

}


if(isset($_POST['submit'])){

    $post = new Business($con, $userLoggedIn);
      $post->registerBusiness($_POST['biznem'],$_POST['phone'],$_POST['email'],$_POST['tax_status'],
   $_POST['tin'],$_POST['add'],$_FILES['photo']['name'],$_FILES['photoo']['name']
   );

}



?>

<!-- register section starts  -->

<section class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>Register Business!</h3>


      <input type="text" name="biznem" required maxlength="50" placeholder="Business Name" class="box">
      <input type="text" name="phone" required maxlength="20" placeholder="Phone number" class="box">
      <input type="email" name="email" required maxlength="50" placeholder="Business email" class="box">
   
      <div class="tax">
         <p>Registered for Tax<span>*</span></p>
            <select name="tax_status" class="input" required>
               <option value="Yes">Yes</option>
               <option value="No">No</option>
              
            </select>
      </div>
            
      

      <input type="text" name="tin" required maxlength="20" placeholder="tin" class="box">
      <input type="text" name="add" required maxlength="50" placeholder="address" class="box">
      <h3>Logo Image</h3>
      <span>
         <input type="file" name="photo" id="photo">
      </span>
      <h3>Shop Image</h3>
      <span>
         <input type="file" name="photoo" id="photoo">
      </span>
      
      <input type="submit" value="register business" name="submit" class="btn">
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