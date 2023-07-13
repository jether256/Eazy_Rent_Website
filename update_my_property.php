<?php
include("includes/header.php");
include("includes/message.php");

if (isset($_SESSION['id'])) {
   $userLoggedIn = $_SESSION['id'];
   $user_details_query = mysqli_query($con, "SELECT * FROM users WHERE id='$userLoggedIn'");
   $user = mysqli_fetch_array($user_details_query);
}
else {

header("Location:index.php");

}






if(isset($_POST['submit'])){

     $post= new MyProperty($con,$userLoggedIn);
         $post->upDateProperty($_POST['property_name'],$_POST['property_price'],$_POST['address'],
            $_POST['offer'],$_POST['con_status'],$_POST['fun_status'],$_POST['bedroom'],$_POST['bathroom'],$_POST['floors'],$_POST['kit'],$_POST['pro_sq'],$_POST['cap_sq'],$_POST['description'],
            $_FILES['img_o1']['name'],$_FILES['img_o2']['name'],$_FILES['img_o3']['name'],$_FILES['img_o4']['name'],$_FILES['img_o5']['name'],$_GET['proid']
      );

}




?>


<!--property--form-->



   <section class="property-form">


      <?php


   $proid = $_GET['proid'];
   $user_house_query = mysqli_query($con, "SELECT * FROM house WHERE ID='$proid'");
   $house = mysqli_fetch_array($user_house_query);

      ?>
      

      <form action="" method="post" enctype="multipart/form-data">
         <h3>Update Property</h3>

          <input type="text" name="proid"  value="<?php echo $_GET['proid'];?>" hidden>

         <div class="box">
            <p>property name<span>*</span></p>
            <input type="text" name="property_name" max_length="50" required placeholder="enter property name" class="input" value="<?php echo $house['title'];?>">
         </div>

         <div class="flex">
            
         <div class="box">
            <p>property price<span>*</span></p>
            <input type="text" name="property_price" max_length="100" min="0" max="99999999999999" required placeholder="enter property price" class="input" value="<?php echo $house['price'];?>">
         </div>


         <div class="box">
            <p>property address<span>*</span></p>
            <input type="text" name="address" max_length="100" min="0" max="99999999999999" required placeholder="enter property address" class="input" value="<?php echo $house['place'];?>">
         </div>



         <div class="box">
            <p>property type<span>*</span></p>
            <select name="offer" class="input" required>
                <option value="<?php echo $house['type'];?>" selected><?php echo $house['type'];?></option>
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
            <p>Construction status<span>*</span></p>
            <select name="con_status" class="input" required>
                <option value="<?php echo $house['con'];?>" selected><?php echo $house['con'];?></option>
               <option value="New Launch">New Launch</option>
               <option value="Ready to Move">Ready to Move</option>
               <option value="Under Construction">Under Construction</option>
            </select>
         </div>


         <div class="box">
            <p>Furnishing status<span>*</span></p>
            <select name="fun_status" class="input" required >
               <option value="<?php echo $house['fun'];?>" selected><?php echo $house['fun'];?></option>
               <option value="Furnished">Furnished</option>
               <option value="Semi-furnished">Semi-furnished</option>
               <option value="Unfurnished">Unfurnished</option>
            </select>
         </div>

         <div class="box">
            <p>Bed Rooms<span>*</span></p>
            <select name="bedroom" class="input" required>
               <option value="<?php echo $house['bed'];?>" selected><?php echo $house['bed'];?></option>
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="3">4</option>
               <option value="4+">4+</option>
            </select>
         </div>

           <div class="box">
            <p>Bath Rooms<span>*</span></p>
            <select name="bathroom" class="input" required>
               <option value="<?php echo $house['bath'];?>" selected><?php echo $house['bath'];?></option>
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="3">4</option>
               <option value="4+">4+</option>
            </select>
         </div>


          <div class="box">
            <p>Total Floors<span>*</span></p>
            <select name="floors" class="input" required>
               <option value="<?php echo $house['floors'];?>" selected><?php echo $house['floors'];?></option>
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="3">4</option>
               <option value="4+">4+</option>
            </select>
         </div>

           <div class="box">
            <p>Total Kitchen<span>*</span></p>
            <select name="kit" class="input" required>
               <option value="<?php echo $house['kitchen'];?>" selected><?php echo $house['kitchen'];?></option>
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="3">4</option>
               <option value="4+">4+</option>
            </select>
         </div>


           <div class="box">
            <p>Building sqft<span>*</span></p>
            <input type="text" name="pro_sq"  required placeholder="Building sqft" class="input" value="<?php echo $house['bsqft'];?>">
         </div>


         <div class="box">
            <p>Carpet sqft<span>*</span></p>
            <input type="text" name="cap_sq" required placeholder="Carpet sqft" class="input" value="<?php echo $house['csqft'];?>">
         </div>

          <div class="box">
            <p>property description<span>*</span></p>
            <textarea name="description" cols="30" rows="10" class="input" ><?php echo $house['descc'];?></textarea>
         </div>

      </div>

     
     <div class="flex">
        
      <div class="box">
         <p>image 01</p>

         <?php
         if (!empty($house['image1'])) {
            
            echo '

             <img src="api/owner/mage1/'.$house['image1'].' " alt="">

            ';
         }

         ?>

         
         <input type="file" name="img_o1" class="input" accept="image/*">
      </div>

       <div class="box">
         <p>image 02</p> 

          <?php
         if (!empty($house['image2'])) {
            
            echo '

             <img src="api/owner/mage1/'.$house['image2'].' " alt="">

            ';
         }

         ?>

         <input type="file" name="img_o2" class="input" accept="image/*">
      </div>

       <div class="box">
         <p>image 03</p>

  <?php
         if (!empty($house['image3'])) {
            
            echo '

             <img src="api/owner/mage1/'.$house['image3'].' " alt="">

            ';
         }

         ?>


         <input type="file" name="img_o3" class="input" accept="image/*">
      </div>

       <div class="box">
         <p>image 04</p>


           <?php
         if (!empty($house['image4'])) {
            
            echo '

             <img src="api/owner/mage1/'.$house['image4'].' " alt="">

            ';
         }

         ?>

         
         <input type="file" name="img_o4" class="input" accept="image/*">
      </div>

       <div class="box">
         <p>image 05</p>

  <?php
         if (!empty($house['image5'])) {
            
            echo '

             <img src="api/owner/mage1/'.$house['image5'].' " alt="">

            ';
         }

         ?>


       
         <input type="file" name="img_o5" class="input" accept="image/*">
      </div>

     </div>

     <input type="submit" name="submit" value="update property" class="btn">

      </form>


   </section>

   <!--property form ends-->





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