<?php
include("includes/header.php");
include("includes/message.php");

if (isset($_SESSION['id'])) {

   $userLoggedIn = $_SESSION['id'];

   $user_details_query = mysqli_query($con, "SELECT * FROM users WHERE id='$userLoggedIn'");
   $user = mysqli_fetch_array($user_details_query);
}
else {


$userLoggedIn='';

}

if (isset($_SESSION['id'])) {
            $userLoggedIn = $_SESSION['id'];
            $user_details_query = mysqli_query($con, "SELECT * FROM business WHERE user_id='$userLoggedIn'");
            $count=mysqli_num_rows($user_details_query);

            if($count==1){

              if(isset($_POST['submit'])){

              $post= new MyProperty($con,$userLoggedIn);
                  $post->postProperty($_POST['property_name'],$_POST['property_price'],$_POST['address'],
                     $_POST['offer'],$_POST['con_status'],$_POST['fun_status'],$_POST['bedroom'],$_POST['bathroom'],$_POST['floors'],$_POST['kit'],$_POST['pro_sq'],$_POST['cap_sq'],$_POST['description'],
                     $_FILES['img_o1']['name'],$_FILES['img_o2']['name'],$_FILES['img_o3']['name'],$_FILES['img_o4']['name'],$_FILES['img_o5']['name']
               );
            }else{
               header("Location:regBiz.php");
               echo "<h1>Please Register Your business before you post a property </h1>";
            }



         }


         }

?>


<!--property--form-->



   <section class="property-form">
      

      <form action="" method="post" enctype="multipart/form-data">
         <h3>Property Details</h3>

          

         <div class="box">
            <p>property name<span>*</span></p>
            <input type="text" name="property_name" max_length="50" required placeholder="enter property name" class="input">
         </div>

         <div class="flex">
            
         <div class="box">
            <p>property price<span>*</span></p>
            <input type="text" name="property_price" max_length="100" min="0" max="99999999999999" required placeholder="enter property price" class="input">
         </div>


         <div class="box">
            <p>property address<span>*</span></p>
            <input type="text" name="address" max_length="100" min="0" max="99999999999999" required placeholder="enter property address" class="input">
         </div>



         <div class="box">
            <p>property type<span>*</span></p>
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
            <p>Construction status<span>*</span></p>
            <select name="con_status" class="input" required>
               <option value="New Launch">New Launch</option>
               <option value="Ready to Move">Ready to Move</option>
               <option value="Under Construction">Under Construction</option>
            </select>
         </div>


         <div class="box">
            <p>Furnishing status<span>*</span></p>
            <select name="fun_status" class="input" required>
               <option value="Furnished">Furnished</option>
               <option value="Semi-furnished">Semi-furnished</option>
               <option value="Unfurnished">Unfurnished</option>
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
            <p>Bath Rooms<span>*</span></p>
            <select name="bathroom" class="input" required>
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
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="3">4</option>
               <option value="4+">4+</option>
            </select>
         </div>


           <div class="box">
            <p>Building sqft<span>*</span></p>
            <input type="text" name="pro_sq"  required placeholder="Building sqft" class="input">
         </div>


         <div class="box">
            <p>Carpet sqft<span>*</span></p>
            <input type="text" name="cap_sq" required placeholder="Carpet sqft" class="input">
         </div>

          <div class="box">
            <p>property description<span>*</span></p>
            <textarea name="description" cols="30" rows="10" class="input"></textarea>
         </div>

      </div>

     
     <div class="flex">
        
      <div class="box">
         <p>image 01<span>*</span></p>
         <input type="file" name="img_o1" class="input" accept="image/*">
      </div>

       <div class="box">
         <p>image 02<span>*</span></p>
         <input type="file" name="img_o2" class="input" accept="image/*">
      </div>

       <div class="box">
         <p>image 03<span>*</span></p>
         <input type="file" name="img_o3" class="input" accept="image/*">
      </div>

       <div class="box">
         <p>image 04<span>*</span></p>
         <input type="file" name="img_o4" class="input" accept="image/*">
      </div>

       <div class="box">
         <p>image 05<span>*</span></p>
         <input type="file" name="img_o5" class="input" accept="image/*">
      </div>

     </div>

     <input type="submit" name="submit" value="post property" class="btn">

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