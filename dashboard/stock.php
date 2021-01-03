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

  <title>Stock</title>

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
            <h1 class="h3 mb-0 text-gray-800">Stock</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
          </div>

          <!-- Content Row -->
          <div class="row">
            <div class="col-md-5">
              <div class="card shadow mb-12">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Order to Supplier</h6>
                </div>
                <div class="card-body">
                  <h2>Distributor's order</h2>
                  <?php
                    $yes=isset($_REQUEST['yes']);
                    if($yes){
                      echo'
                        <br />
                          <div class="alert alert-success alert-dismissable text-center">
                              <button style="font-size:20px" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                              <h5 style="font-size:20px">Your order has been successfully sent.</h5>
                          </div>';
                    }
                  ?>
                  <form action="../controllers/salam.php" method="post" role="form" class="php-email-form">
                    <div class="form-group">
                      <?php
                        if(isset($_SESSION['dist'])) {
                          echo '<input hidden class="form-control" name="distributor_name" value="'.$_SESSION['dist'].'" required/>';
                        } else {
                          echo '<h6>Distributor Name:</h6>';
                          echo '<input type="text" class="form-control" name="distributor_name" placeholder="Enter your name here" required />';
                        }
                      ?>
                    </div>
                    <div class="form-group">
                      <h6>Address:</h6>
                      <input type="text" class="form-control" name="Address" placeholder="Enter Address here" required />
                    </div>
                    <div class="form-group">
                      <h6>Phone Number:</h6>
                      <input type="text" class="form-control" name="phone_number" placeholder="Enter Phone Number here" required />
                    </div>
                    <div class="form-group">
                        <h6>Quantity:</h6>
                        <select name="quantity" class="form-control">
                          <?php
                            for($i = 1; $i <= 100; $i++) {
                              echo "<option value='$i'>$i litre(s)</option>";
                            }
                          ?>
                        </select>
                    </div>
                    <div class="text-center">
                          <button class="btn btn-md" name="orders" type="submit">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-7">
              <div class="card shadow mb-12">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Pending Stock</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>distributor Name</th>
                        
                          <th>Phone Number</th>
                          <th>Address</th>
                  
                          <th>Quantity</th>
                          <th>Proccessed</th>
                          <th>Date</th>
                          <th>Control</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $user = $_SESSION['dist'];
                          include('../controllers/connection.php');
                          $sql = mysqli_query($dbcon,"SELECT * FROM vieworder WHERE processed = false ORDER BY date DESC");
                          while($row = mysqli_fetch_array($sql)){echo'
                            <div class="modal fade" id="approveOrder'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Ready to Approve order?</h5>
                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">X</span>
                                  </button>
                                </div>
                                <div class="modal-footer">
                                <form action="../controllers/editDistOrder.php" method="post">
                                  <input hidden name="id" value="'.$row['id'].'"/>
                                  <input class="form-control" name="distributor_name" value="'.$row['distributor_name'].'"/>
                    
                                  <input class="form-control" name="phone_number" value="'.$row['phone_number'].'"/>
                                  <input class="form-control" name="Address" value="'.$row['Address'].'"/>
                                  <input class="form-control" name="quantity" value="'.$row['quantity'].'"/>
                                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                  <button name="approve" type="submit" class="btn btn-primary" href="">Approve</button>
                                </form>
                                </div>
                              </div>
                            </div>
                          </div>
                            ';
                              echo'
                              <tr>
                                <td>'.$row['id'].'</td>
                                <td>'.$row['distributor_name'].'</td>
                                <td>'.$row['phone_number'].'</td>
                                <td>'.$row['Address'].'</td>
                                <td>'.$row['quantity'].' litre(s)</td>
                                <td>'.($row['processed'] == true ? '
                                  <a href="#" class="btn btn-success btn-icon-split">
                                    <span class="icon text-white-50">
                                      <i class="fas fa-check"></i>
                                    </span>
                                    <span class="text">Order Processed</span>
                                  </a>
                                ' : '
                                  <a href="#" class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                      <i class="fas fa-times"></i>
                                    </span>
                                    <span class="text">Order Unprocessed</span>
                                  </a>
                                ').'</td>
                                <td>'.$row['date'].'</td>
                                <td>
                                  <a href="#" data-toggle="modal" data-target="#approveOrder'.$row['id'].'" class="btn btn-info">
                                    <span class="icon text-white-50">
                                      <i class="fas fa-edit"></i>
                                    </span>
                                  </a>
                                </td>
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
          </div>
          <div style="margin-top: 20px" class="row">
            <div class="col-md-12">
              <div class="card shadow mb-12">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Available Stock</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                        
                          <th>Phone Number</th>
                          <th>Address</th>
                  
                          <th>Quantity</th>
                          <th>Proccessed</th>
                          <th>Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $user = $_SESSION['dist'];
                          include('../controllers/connection.php');
                          $sql = mysqli_query($dbcon,"SELECT * FROM vieworder WHERE processed = true ORDER BY date DESC");
                          while($row = mysqli_fetch_array($sql)){
                              echo'
                              <tr>
                                <td>'.$row['id'].'</td>
                                <td>'.$row['distributor_name'].'</td>
                                <td>'.$row['phone_number'].'</td>
                                <td>'.$row['Address'].'</td>
                                <td>'.$row['quantity'].' litre(s)</td>
                                <td>'.($row['processed'] == true ? '
                                  <a href="#" class="btn btn-success btn-icon-split">
                                    <span class="icon text-white-50">
                                      <i class="fas fa-check"></i>
                                    </span>
                                    <span class="text">Order Processed</span>
                                  </a>
                                ' : '
                                  <a href="#" data-toggle="modal" data-target="#approveOrder'.$row['id'].'" class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                      <i class="fas fa-times"></i>
                                    </span>
                                    <span class="text">Order Unprocessed</span>
                                  </a>
                                ').'</td>
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
          </div>
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
