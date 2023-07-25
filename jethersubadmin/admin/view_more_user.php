<?php

include("includes/header.php");

if(isset($_GET['uid'])){


  $id=$_GET['uid'];
  $query=mysqli_query($con,"SELECT * FROM users WHERE id='$id'");
  $b=mysqli_fetch_array($query);

}

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><?php echo $b['status'];?></h3>

              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  
                  <tbody>
                    <tr><b>Name:</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $b['name'];?></tr><br>

                    <tr><b>Phone Number:</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $b['phone'];?></tr><br>

                    <tr><b>Email:</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <?php echo $b['email'];?></tr><br>

                    <tr><b>User Type:</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <?php echo $b['type'];?></tr><br>

                    <tr><b>Status:</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <?php echo $b['status'];?></tr><br>
                      
                    <tr><b>Address:</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <?php echo $b['addr'];?></tr><br> 
               
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      
        <!-- /.row -->
       
        <!-- /.row -->
        
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
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
