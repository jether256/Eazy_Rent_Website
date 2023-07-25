<?php

include("includes/header.php");

if(isset($_GET['bizid'])){


  $id=$_GET['bizid'];
  $query=mysqli_query($con,"SELECT * FROM business WHERE ID='$id'");
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
                <h3 class="card-title"><?php echo $b['status1'];?></h3>

              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  
                  <tbody>
                    <tr><b>Business Name:</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $b['bizname'];?></tr><br>

                    <tr><b>Phone Number:</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $b['phone1'];?></tr><br>

                    <tr><b>Business Email:</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <?php echo $b['email1'];?></tr><br>

                    <tr><b>Tax Regsitration:</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <?php echo $b['taxRegistered'];?></tr><br>

                    <tr><b>Tin Number:</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <?php echo $b['tinNumber'];?></tr><br>
                      
                    <tr><b>Address:</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <?php echo $b['address'];?></tr><br>

                    <tr><b>Service:</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <?php echo $b['service'];?></tr><br> 
                    <tr><b>Open/Closed:</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <?php echo $b['shopOpen'];?></tr><br>

                    <tr><b>Rating:</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <?php echo $b['rating'];?></tr><br>

                    <tr><b>Total Rating:</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <?php echo $b['totalRating'];?></tr><br>

                    <tr><b>Registartion Date:</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <?php echo $b['isTopPicked'];?></tr><br>

                    <tr><b>Paid:</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <?php echo $b['paid'];?></tr><br>
                      
                    <tr><b>Online:</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <?php echo $b['online'];?></tr><br>

                    <tr><b>C.O.D:</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <?php echo $b['cod'];?></tr><br>   
                    <tr><b>End Date:</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <?php echo $b['end'];?></tr><br>
                      
                    <tr><b>Renew Date:</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <?php echo $b['renew'];?></tr><br>

                    <tr><b>Blocked:</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <?php echo $b['blocked'];?></tr><br>
               
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
