<?php

include("includes/header.php");


if(isset($_POST['submit'])){

   $profile= new All($con);
   $profile->addWare($_POST['name'],$_POST['fun'],$_POST['cons'],
    $_POST['bsft'],$_POST['csqft'],$_POST['price'],$_POST['area'], 
    $_POST['loc'],$_FILES['pic1']['name'], $_FILES['pic2']['name'], $_FILES['pic3']['name'],
     $_FILES['pic4']['name'],
    $_FILES['pic5']['name']);
  
   
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
            <h1>Add WareHouse</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Add Warehouse</li>
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
                <h3 class="card-title">Add Warehouse</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="" method="post" enctype="multipart/form-data">
                <div class="card-body">

                   <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                  </div> 

                 
                <div class="form-group">
                  <label>Furnishing</label>
                  <select name="fun" class="form-control select2" style="width: 100%;" required>
                    <option selected="selected">Furnished</option>
                    <option value="Furnished">Furnished</option>
                    <option value="Semi-furnished">Semi-furnished</option>
                    <option value="Unfurnished">Unfurnished</option>
                  </select>
                </div>
                    
                <div class="form-group">
                  <label>Construction Status</label>
                  <select name="cons" class="form-control select2" style="width: 100%;">
                    <option selected="selected">New Launch</option>
                    <option value="New Launch">New Launch</option>
                    <option value="Ready to Move">Ready to Move</option>
                    <option value="Under Construction">Under Construction</option>
                    
                  </select>
                </div>

                 <div class="form-group">
                    <label for="exampleInputEmail1">Building Sqft</label>
                    <input type="text" name="bsft" class="form-control" id="exampleInputEmail1" placeholder="Enter Building Sqft">
                  </div> 

                   <div class="form-group">
                    <label for="exampleInputEmail1">Carpert Sqft</label>
                    <input type="text" name="csqft" class="form-control" id="exampleInputEmail1" placeholder="Enter Carpert Sqft">
                  </div> 

                   


                  <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="text" name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter Price">
                  </div> 


                    <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                     <textarea class="form-control" rows="3" name="area" placeholder="Enter description..." ></textarea>
                  </div>


                   <div class="form-group">
                    <label for="exampleInputEmail1">Location</label>
                    <input type="text" name="loc" class="form-control" id="exampleInputEmail1" placeholder="Enter Price">
                  </div> 



                  <div class="form-group">
                    <label for="exampleInputFile">Image 1</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="pic1" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div> 


                  <div class="form-group">
                    <label for="exampleInputFile">Image 2</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="pic2" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>  



                  <div class="form-group">
                    <label for="exampleInputFile">Image 3</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="pic3" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>  



                  <div class="form-group">
                    <label for="exampleInputFile">Image 4</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="pic4" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>  


                  <div class="form-group">
                    <label for="exampleInputFile">Image 5</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="pic5" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
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
