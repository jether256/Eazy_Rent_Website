<?php

include("includes/header.php");

if(isset($_SESSION['id'])){
   $userLoggedIn = $_SESSION['id'];
}else{
   $userLoggedIn = '';
}





?>


<!-- listings section starts  -->

<section class="listings">

   <h1 class="heading">Searched Results</h1>

   

   <div class="box-container">
<?php

   if(isset($_POST['search_hef'])){

   $seir= new Property($con);
   echo $seir->searchProperty($_POST['location'],$_POST['offer'],$_POST['bedroom'],$_POST['minimum'],$_POST['maximum']);
 
}else{

   echo '<h1>no property listed yet....</h1>';
}

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

<script>

document.querySelector('#filter-btn').onclick = () =>{
   document.querySelector('.filters').classList.add('active');
}

document.querySelector('#close-filter').onclick = () =>{
   document.querySelector('.filters').classList.remove('active');
}

</script>

</body>
</html>