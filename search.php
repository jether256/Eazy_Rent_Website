<?php

include("includes/header.php");

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}



if(isset($_POST['search_hef'])){

if(isset($_POST['search'])){


   $seir= new Property($con);
   $seir->searchProperty($_POST['location'],$_POST['offer'],$_POST['bedroom'],$_POST['minimum'],$_POST['maximum']);
}




}


?>


<section class="listings">

   <h1 class="heading">searched results</h1>

   <div class="box-container">

      <div class="box">
         <div class="admin">
            <h3>j</h3>
            <div>
               <p>john deo</p>
               <span>10-11-2022</span>
            </div>
         </div>
         <div class="thumb">
            <p class="total-images"><i class="far fa-image"></i><span>4</span></p>
            <p class="type"><span>house</span><span>sale</span></p>
            <form action="" method="post" class="save">
               <button type="submit" name="save" class="far fa-heart"></button>
            </form>
            <img src="images/house-img-1.webp" alt="">
         </div>
         <h3 class="name">modern flats and appartments</h3>
         <p class="location"><i class="fas fa-map-marker-alt"></i><span>andheri, mumbai, india - 401303</span></p>
         <div class="flex">
            <p><i class="fas fa-bed"></i><span>3</span></p>
            <p><i class="fas fa-bath"></i><span>2</span></p>
            <p><i class="fas fa-maximize"></i><span>750sqft</span></p>
         </div>
         <a href="view_property.html" class="btn">view property</a>
      </div>

      <div class="box">
         <div class="admin">
            <h3>j</h3>
            <div>
               <p>john deo</p>
               <span>10-11-2022</span>
            </div>
         </div>
         <div class="thumb">
            <p class="total-images"><i class="far fa-image"></i><span>4</span></p>
            <p class="type"><span>flat</span><span>sale</span></p>
            <form action="" method="post" class="save">
               <button type="submit" name="save" class="far fa-heart"></button>
            </form>
            <img src="images/house-img-2.webp" alt="">
         </div>
         <h3 class="name">modern flats and appartments</h3>
         <p class="location"><i class="fas fa-map-marker-alt"></i><span>andheri, mumbai, india - 401303</span></p>
         <div class="flex">
            <p><i class="fas fa-bed"></i><span>3</span></p>
            <p><i class="fas fa-bath"></i><span>2</span></p>
            <p><i class="fas fa-maximize"></i><span>750sqft</span></p>
         </div>
         <a href="view_property.html" class="btn">view property</a>
      </div>

      <div class="box">
         <div class="admin">
            <h3>j</h3>
            <div>
               <p>john deo</p>
               <span>10-11-2022</span>
            </div>
         </div>
         <div class="thumb">
            <p class="total-images"><i class="far fa-image"></i><span>4</span></p>
            <p class="type"><span>flat</span><span>sale</span></p>
            <form action="" method="post" class="save">
               <button type="submit" name="save" class="far fa-heart"></button>
            </form>
            <img src="images/house-img-3.jpg" alt="">
         </div>
         <h3 class="name">modern flats and appartments</h3>
         <p class="location"><i class="fas fa-map-marker-alt"></i><span>andheri, mumbai, india - 401303</span></p>
         <div class="flex">
            <p><i class="fas fa-bed"></i><span>3</span></p>
            <p><i class="fas fa-bath"></i><span>2</span></p>
            <p><i class="fas fa-maximize"></i><span>750sqft</span></p>
         </div>
         <a href="view_property.html" class="btn">view property</a>
      </div>

   </div>

</section>

<!-- listings section ends -->











<!-- footer section starts  -->

<footer class="footer">

   <section class="flex">

      <div class="box">
         <a href="tel:1234567890"><i class="fas fa-phone"></i><span>0703157610</span></a>
         <a href="tel:1112223333"><i class="fas fa-phone"></i><span>0778316724</span></a>
         <a href="mailto:shaikhanas@gmail.com"><i class="fas fa-envelope"></i><span>wahab@gmail.com</span></a>
         <a href="#"><i class="fas fa-map-marker-alt"></i><span>Kampala</span></a>
      </div>

      <div class="box">
         <a href="home.php"><span>home</span></a>
         <a href="about.php"><span>about</span></a>
         <a href="contact.php"><span>contact</span></a>
         <a href="listings.php"><span>all listings</span></a>
         <a href="#"><span>saved properties</span></a>
      </div>

      <div class="box">
         <a href="#"><span>facebook</span><i class="fab fa-facebook-f"></i></a>
         <a href="#"><span>twitter</span><i class="fab fa-twitter"></i></a>
         <a href="#"><span>linkedin</span><i class="fab fa-linkedin"></i></a>
         <a href="#"><span>instagram</span><i class="fab fa-instagram"></i></a>

      </div>

   </section>

   <div class="credit">&copy; copyright @ 2023 by <span>Mutale Jether</span> | all rights reserved!</div>

</footer>

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