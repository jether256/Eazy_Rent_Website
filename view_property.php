<?php

include("includes/header.php");


?>

<!-- header section ends -->

<!-- view property section starts  -->

<section class="view-property">

  <?php if($userLoggedIn !==null){

$proid=$_GET['proid'];
$viewPro= new Property($con);
echo $viewPro->getPropertyDetails($proid);


  }else{


echo 'Please login first';

}

?>
   

   
</section>

<!-- view property section ends -->












<!-- footer section starts  -->

<?php

include("includes/foooot.php");

?>




<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script src="https://cdnjs.cloudfare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


<?php include 'includes/message.php';?>

<script>

    var swiper = new Swiper(".images-container", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 400,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });

  </script>

<!-- footer section ends --
<!-- footer section ends --

<!-- custom js file link  -->
<script src="assets/js/script.js"></script>

</body>
</html>