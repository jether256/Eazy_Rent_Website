<?php

include("includes/header.php");

if(isset($_GET['bizid'])){

  $id=$_GET['bizid'];
}


?>

<!-- listings section starts  -->

<section class="listings">

   <h1 class="heading"><?php echo $id?></h1>

   <div class="box-container">

     <?php

     $all= new Property($con);
      echo $all->getBizAll($id);



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