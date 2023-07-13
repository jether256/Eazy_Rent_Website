<?php

include("includes/header.php");





if(isset($_POST['send'])){

     $contact= new Contact();
         $contact->sendEmail($_POST['email'],$_POST['message']);

}



?>

<!-- header section ends -->

<!-- contact section starts  -->

<section class="contact">

   <div class="row">
      <div class="image">
         <img src="images/contact-img.svg" alt="">
      </div>
      <form action="" method="post">
         <h3>get in touch</h3>
         <!-- <input type="text" name="name" required maxlength="50" placeholder="enter your name" class="box"> -->
         <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="box">
         <!-- <input type="number" name="number" required maxlength="10" max="9999999999" min="0" placeholder="enter your number" class="box"> -->
         <textarea name="message" placeholder="enter your message" required maxlength="1000" cols="30" rows="10" class="box"></textarea>
         <input type="submit" value="send message" name="send" class="btn">
      </form>
   </div>

</section>

<!-- contact section ends -->

<!-- faq section starts  -->

<section class="faq" id="faq">

   <h1 class="heading">FAQ</h1>

   <div class="box-container">

      <div class="box active">
         <h3><span>how to cancel booking?</span><i class="fas fa-angle-down"></i></h3>
         <p>You can easily contact the owner of the property through the contacts provided and inform them about the cancelation of the booking</p>
      </div>

      <div class="box active">
         <h3><span>when will I get the possession?</span><i class="fas fa-angle-down"></i></h3>
         <p>After negotiating with the owner of the property and paying the agreed rent one can be in posetion of the property for the agreed amount of time</p>
      </div>

      <div class="box">
         <h3><span>where can I pay the rent?</span><i class="fas fa-angle-down"></i></h3>
         <p>Rent can be paid directly to the owner of the property but plaese donot pay any amount without seeing the owner of the property and without a receipt</p>
      </div>

      <div class="box">
         <h3><span>how to contact with the buyers?</span><i class="fas fa-angle-down"></i></h3>
         <p>The buyers will contact you through the contacts you list on the posted properties</p>
      </div>

      <div class="box">
         <h3><span>why my listing not showing up?</span><i class="fas fa-angle-down"></i></h3>
         <p>This might be due to you account being suspended or technical issue.You can plaese contact the managemnet for further information</p>
      </div>

      <div class="box">
         <h3><span>how to promote my listing?</span><i class="fas fa-angle-down"></i></h3>
         <p>Make sure you upload nice loooking photos of that can easily be seen by the cutomers </p>
      </div>

   </div>

</section>

<!-- faq section ends -->










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

</body>
</html>