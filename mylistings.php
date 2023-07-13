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



?>

<!-- listings section starts  -->

<section class="listings">

   <h1 class="heading">All My listings</h1>

   <div class="box-container">


       


     <?php

  
      $all= new MyProperty($con,$userLoggedIn);

      echo $all->allMyProperties();


     ?> 

   </div>

</section>

<!-- listings section ends -->











<!-- footer section starts  -->

<?php

include("includes/foooot.php");

?>
<!-- footer section ends --


<!-- custom js file link  -->
<script src="assets/js/script.js"></script>

</body>
</html>