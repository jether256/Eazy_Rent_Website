<?php

include("includes/header.php");


if(isset($_GET['proid'])){

  $id=$_GET['proid'];


  $query=mysqli_query($con,"SELECT * FROM house WHERE ID='$id'");
  $house=mysqli_fetch_array($query);
}


if(isset($_POST['submit'])){

    

   $profile= new All($con);
   $profile->editApart($_POST['name'],$_POST['bed'],$_POST['bath'],$_POST['fun'],$_POST['cons'],
    $_POST['bsft'],$_POST['csqft'],$_POST['flo'],$_POST['kit'],$_POST['price'],$_POST['area'], 
    $_POST['loc'],$_GET['proid']);
  
   
}else{

   // $warning_msg[]='Something went wrong!';
}


?>

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-10">
            <h1>Edit Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="view_apart.php">View Apartment</a></li>
              <li class="breadcrumb-item active">Edit Apartment</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-10">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Apartment</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="" method="post" enctype="multipart/form-data">
                <div class="card-body">

                   <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name" class="input" value="<?php echo $house['title'];?>">
                  </div> 

                  <div class="form-group">
                  <label>Bedrooms</label>
                  <select name="bed" class="form-control select2" style="width: 100%;" required>
                    <option value="<?php echo $house['bed'];?>" selected><?php echo $house['bed'];?></option>
                    <option value="0">0</option>   
                     <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="3">4</option>
                     <option value="4+">4+</option>
                  </select>
                </div>



                <div class="form-group">
                  <label>Bathrooms</label>
                  <select name="bath"class="form-control select2" style="width: 100%;" required>
                     <option value="<?php echo $house['bath'];?>" selected><?php echo $house['bath'];?></option>
                    <option value="0">0</option>   
                     <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="3">4</option>
                     <option value="4+">4+</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Furnishing</label>
                  <select name="fun" class="form-control select2" style="width: 100%;" required>
                     <option value="<?php echo $house['fun'];?>" selected><?php echo $house['fun'];?></option>
                    <option value="Furnished">Furnished</option>
                    <option value="Semi-furnished">Semi-furnished</option>
                    <option value="Unfurnished">Unfurnished</option>
                  </select>
                </div>
                    
                <div class="form-group">
                  <label>Construction Status</label>
                  <select name="cons" class="form-control select2" style="width: 100%;">
                     <option value="<?php echo $house['con'];?>" selected><?php echo $house['con'];?></option>
                    <option value="New Launch">New Launch</option>
                    <option value="Ready to Move">Ready to Move</option>
                    <option value="Under Construction">Under Construction</option>
                    
                  </select>
                </div>

                 <div class="form-group">
                    <label for="exampleInputEmail1">Building Sqft</label>
                    <input type="text" name="bsft" class="form-control" id="exampleInputEmail1" placeholder="Enter Building Sqft" value="<?php echo $house['bsqft'];?>">
                  </div> 

                   <div class="form-group">
                    <label for="exampleInputEmail1">Carpert Sqft</label>
                    <input type="text" name="csqft" class="form-control" id="exampleInputEmail1" placeholder="Enter Carpert Sqft" value="<?php echo $house['csqft'];?>">
                  </div> 

                   <div class="form-group">
                  <label>Total Floors</label>
                  <select name="flo"class="form-control select2" style="width: 100%;" required>
                  <option value="<?php echo $house['floors'];?>" selected><?php echo $house['floors'];?></option>
                    <option value="0">0</option>   
                     <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="3">4</option>
                     <option value="4+">4+</option>
                  </select>
                </div>

                 <div class="form-group">
                  <label>Total Kitchen</label>
                  <select name="kit"class="form-control select2" style="width: 100%;" required>
                    <option value="<?php echo $house['kitchen'];?>" selected><?php echo $house['kitchen'];?></option>
                    <option value="0">0</option>   
                     <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="3">4</option>
                     <option value="4+">4+</option>
                  </select>
                </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="text" name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter Price" value="<?php echo $house['price'];?>">
                  </div> 


                    <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                     <textarea class="form-control" rows="3" name="area" placeholder="Enter description..." > <?php echo $house['descc'];?>   </textarea>
                  </div>


                   <div class="form-group">
                    <label for="exampleInputEmail1">Location</label>
                    <input type="text" name="loc" class="form-control" id="exampleInputEmail1" placeholder="Enter Price" class="input" value="<?php echo $house['place'];?>">
                  </div> 
     

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <?php
include("footer.php");

  ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<script>
$(function () {
  bsCustomFileInput.init();
});
</script><script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
</body>
</html>
