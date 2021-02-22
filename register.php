<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register - Water Distribution</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Baker - v2.1.0
  * Template URL: https://bootstrapmade.com/baker-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

        <h1 class="logo mr-auto"><a href="index.php">Water Distribution App</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <?php include('nav.php'); ?>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Register Here</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Register Page</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4 col-xs-12 col-sm-12">
              <?php
                  $yes=isset($_REQUEST['yes']);
                  if($yes){
                  echo'
                  <div align="center" class="box">
                    <p>Your password does not match.</p>
                  </div>
                  ';
                  }
                  $no=isset($_REQUEST['no']);
                  if($no){
                  unset($_SESSION['user']);
                  unset($_SESSION['user_id']);
                  unset($_SESSION['user_phone']);
                  unset($_SESSION['user_address']);
                  echo'
                  <div align="center" class="box">
                      <p>Registration Failed.</p>
                  </div>
                  ';
                }
              ?>
              <h2>Register here</h2>
              <form action="controllers/registerUser.php" method="post" role="form" class="php-email-form">
                <div class="form-group">
                  <h6>Fullname:</h6>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter fullname here" required/>
                </div>
                <div class="form-group">
                  <h6>Phone number:</h6>
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone number here" required/>
                </div>
                <div class="form-group">
                  <h6>Address:</h6>
                  <input type="text" class="form-control" name="address" id="address" placeholder="Enter address here" required/>
                </div>
                <div class="form-group">
                  <h6>Password:</h6>
                  <input type="password" class="form-control" name="password" placeholder="Enter password here" required/>
                </div>
                <div class="form-group">
                  <h6>Confirm password:</h6>
                  <input type="password" class="form-control" name="confirm-password" placeholder="Enter password here" required/>
                </div>
                <div class="text-center">
                    <button class="login-btn" name="submit" type="submit">Submit</button>
                </div>
              </form>
              <div style="padding-top: 20px" class="text-center">
                <p>Already has an account? Login <a href="login.php">here</a></p>
              </div>
          </div>
          <div class="col-md-4"></div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include('footer.php'); ?>

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>