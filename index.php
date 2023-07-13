
<?php
include("includes/header.php");

?>

<div class="home">
    
   
   <section class="center">

      <form action="search.php" method="post">
         <h3>find your perfect home</h3>
         <div class="box">
            <p>enter location <span>*</span></p>
            <input type="text" name="location" required maxlength="50" placeholder="enter ciyt name" class="input">
         </div>
         <div class="flex">
            <div class="box">
               <p>property type <span>*</span></p>
               <select name="offer" class="input" required>
               <option value="Rentals">Rentals</option>
               <option value="Apartments">Apartments</option>
               <option value="Bangalows">Bangalows</option>
               <option value="Hostels">Hostels</option>
               <option value="Office Space">Office Space</option>
               <option value="Land">Land</option>
               <option value="Warehouses">Warehouses</option>
               <option value="Tourist B & B">Tourist B & B</option>
               </select>
            </div>
            <div class="box">
               <p>Bed Rooms<span>*</span></p>
               <select name="bedroom" class="input" required>
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="3">4</option>
               <option value="4+">4+</option>
               </select>
            </div>
            <div class="box">
               <p>maximum rent<span>*</span></p>
               <select name="minimum" class="input" required>
                  <option value="100000">100,000 Shs</option>
                  <option value="200000">200,000 Shs</option>
                  <option value="300000">300,000 Shs</option>
                  <option value="400000">400,000 Shs</option>
                  <option value="500000">500,000 Shs</option>
                  <option value="600000">600,000 Shs</option>
                  <option value="700000">700,000 Shs</option>
                  <option value="800000">800,000 Shs</option>
                  <option value="900000">900,000 Shs</option>
                  <option value="1000000">1,000,000 Shs</option>
                  <option value="2000000">2,000,000 Shs</option>
                  <option value="3000000">3,000,000 Shs</option>
                  <option value="4000000">4,000,000 Shs</option>
                  <option value="5000000">5,000,000 Shs</option>
                  <option value="6000000">6,000,000 Shs</option>
                  <option value="7000000">7,000,000 Shs</option>
                  <option value="8000000">8,000,000 Shs</option>
                  <option value="9000000">9,000,000 Shs</option>
                  <option value="10000000">10,000,000 Shs</option>
                  <option value="20000000">20,000,000 Shs</option>
                  <option value="30000000">30,000,000 Shs</option>
               </select>
            </div>
            <div class="box">
               <p>maximum rent <span>*</span></p>
               <select name="maximum" class="input" required>
                  <option value="100000">100,000 Shs</option>
                  <option value="200000">200,000 Shs</option>
                  <option value="300000">300,000 Shs</option>
                  <option value="400000">400,000 Shs</option>
                  <option value="500000">500,000 Shs</option>
                  <option value="600000">600,000 Shs</option>
                  <option value="700000">700,000 Shs</option>
                  <option value="800000">800,000 Shs</option>
                  <option value="900000">900,000 Shs</option>
                  <option value="1000000">1,000,000 Shs</option>
                  <option value="2000000">2,000,000 Shs</option>
                  <option value="3000000">3,000,000 Shs</option>
                  <option value="4000000">4,000,000 Shs</option>
                  <option value="5000000">5,000,000 Shs</option>
                  <option value="6000000">6,000,000 Shs</option>
                  <option value="7000000">7,000,000 Shs</option>
                  <option value="8000000">8,000,000 Shs</option>
                  <option value="9000000">9,000,000 Shs</option>
                  <option value="10000000">10,000,000 Shs</option>
                  <option value="20000000">20,000,000 Shs</option>
                  <option value="30000000">30,000,000 Shs</option>
               </select>
            </div>
         </div>
         <input type="submit" value="search property" name="search_hef" class="btn">
      </form>

   </section>

</div>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading">our services</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>buy house</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>rent house</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>sell house</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>flats and buildings</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
      </div>

      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>shops and malls</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
      </div>

      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>24/7 service</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- listings section starts  -->

<section class="listings">

   <h1 class="heading">latest listings</h1>

   

   <div class="box-container">
<?php

   $rando= new Property($con);
  echo  $rando->getPropertiesRand();



   ?>
     
   </div> 

   <div style="margin-top: 2rem; text-align:center;">
      <a href="listings.php" class="inline-btn">view all</a>
   </div>

</section>

<!-- listings section ends -->




<?php

$ko= new Unique();

echo $ko->createUnique();


?>





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