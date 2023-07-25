<?php

include("includes/header.php");



?>

<!-- listings section starts  -->

<section class="listings">

  <?php
  $proid=$_GET['proid'];
  $query=mysqli_query($con,"SELECT * FROM category WHERE name='$proid'");
  $ko=mysqli_fetch_array($query);
  ?>

   <h1 class="heading"><?php echo $ko['name'];?></h1>

   <div class="box-container">

  <?php

 $proid=$_GET['proid'];
 $catProo= new Property($con);
echo $catProo->catPro($proid);

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