<?php

include("includes/header.php");

if(isset($_GET['banaid'])){

  $id=$_GET['banaid'];

  $query=mysqli_query($con,"SELECT * FROM banner WHERE id='$id'");
  $ko=mysqli_fetch_array($query);
}


?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Bana Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="view_bana.php">View Banners</a></li>
              <li class="breadcrumb-item active">Bana Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->

      


      <div class="card card-solid">



        <div class='card-body'>
          <div class='row'>
            <div class='col-12 col-sm-6'>
              <h3 class='d-inline-block d-sm-none'><?php echo $ko['bizname'];?></h3>
              <div class='col-12'>
               <img src='../../api/owner/bana/<?php echo $ko['image'];?>' alt='' style='width:600px;height:570px'>
              </div>
              <div class='col-12 product-image-thumbs'>
                
                
              </div>
            </div>
            <div class='col-12 col-sm-6'>
              <h3 class='my-3'><?php echo "Business Name: " . $ko['bizname']; ?></h3>
              <hr>
              <h3 class='my-3'><?php echo "Title: " . $ko['title']; ?></h3>

              <hr>
              <h3 class='my-3'><?php echo "Paid: " . $ko['paid']; ?></h3>
             
               <hr>
            </div>
          </div>
          
        </div>



        
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

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
  $(document).ready(function() {
    $('.product-image-thumb').on('click', function () {
      var $image_element = $(this).find('img')
      $('.product-image').prop('src', $image_element.attr('src'))
      $('.product-image-thumb.active').removeClass('active')
      $(this).addClass('active')
    })
  })
</script>
</body>
</html>
