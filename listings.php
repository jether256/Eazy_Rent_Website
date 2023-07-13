<?php

include("includes/header.php");



?>

<!-- listings section starts  -->

<section class="listings">

   <h1 class="heading">all listings</h1>

   <div class="box-container">

     <?php

     $all= new Property($con);
      echo $all->allProperties();



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