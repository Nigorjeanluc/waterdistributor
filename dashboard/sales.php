<?php
    session_start();
    if(!isset($_SESSION['dist'])){
      echo "<meta http-equiv='refresh' content='0;url=../login.php'>";
    }
    include('../controllers/connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sales</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php
      include('sidebar1.php');
    ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php
          include('topnav1.php')
        ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Sales</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
          </div>

          <!-- Content Row -->
          <div class="row">
            <div class="col-md-12">
              <div class="card shadow mb-12">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Sales</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>Quantity</th>
                        <th>Amount Paid</th>
                        <th>Date</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      $sql = mysqli_query($dbcon,"SELECT * FROM distributor_sales ORDER BY ID DESC");
                      while($row = mysqli_fetch_array($sql)){
                          echo'
                          <tr>
                            <td>'.$row['id'].'</td>
                            <td>'.$row['customerName'].'</td>
                            <td>'.$row['phone'].'</td>
                            <td>'.$row['address'].'</td>
                            <td>'.$row['quantity'].'</td>
                            <td>'.$row['amount'].' RWF</td>
                            <td>'.$row['date'].'</td>
                          </tr>
                          ';
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            </div>
            <div class="col-md-12">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Total Amount</div>
                    </div>
                    <div class="col-auto">
                    <?php
                      $sql = mysqli_query($dbcon,"SELECT SUM(amount) FROM distributor_sales");
                      while($row = mysqli_fetch_array($sql)){
                        echo '<h2>'.$row['SUM(amount)'].' RWF</h2>';
                      }
                    ?>
                      <i class="fas fa-exchange fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

          <!-- Content Row -->

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php
        include('footer.php');
      ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php
    include('logout.php');
  ?>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>

</body>

</html>
