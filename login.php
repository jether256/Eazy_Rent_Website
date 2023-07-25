 <?php
include("includes/header.php");
require 'includes/form_handlers/login_handler.php';
?>

<!-- login section starts  -->

<section class="form-container">

   <form action="" method="post">
      <h3>welcome back!</h3>
      <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="box">
      <input type="password" name="pass" required maxlength="20" placeholder="enter your password" class="box">
      <p>don't have an account? <a href="register.php">register new</a></p>
      <input type="submit" value="login now" name="submit" class="btn">
   </form>

</section>

<!-- login section ends -->





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