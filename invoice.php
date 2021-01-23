<?php
    session_start();
    include('./controllers/connection.php');
    $sid=$_REQUEST['inv'];
		$pipsql = mysqli_query($dbcon,"SELECT * FROM orders WHERE ID='$sid'");
    while($row=mysqli_fetch_array($pipsql)){
      $customerName = $row['customerName'];
      $address = $row['address'];
      $quantity = $row['quantity'];
      $price = $row['price'];
      $type = $row['type'];
      $date = $row['date'];
      $phone = $row['phoneNumber'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Invoice</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Override some Bootstrap CDN styles - normally you should apply these through your Bootstrap variables / sass -->
    <style>
        body { font-family: "Roboto", serif; font-size: 0.8rem; font-weight: 400; line-height: 1.4; color: #000000; background: lightblue }
        h1, h2, h4, h5 { font-weight: 700; color: #000000; }
        h1 { font-size: 2rem; }
        h2 { font-size: 1.6rem; }
        h4 { font-size: 1.2rem; }
        h5 { font-size: 1rem; }
        .table { color: #000; }
        .table td, .table th { border-top: 1px solid #000; }
        .table thead th { vertical-align: bottom; border-bottom: 2px solid #000; }

        @page {
            margin-top: 2.5cm;
            margin-bottom: 2.5cm;
        }

        @page :first {
            margin-top: 0;
            margin-bottom: 2.5cm;
        }
    </style>

</head>
<body>

<div style="background-color: #000000; height: 10px;"></div>

<div class="container-fluid pt-2 pt-md-4 px-md-5">

    <!-- Invoice heading -->

    <table class="table table-borderless">
        <tbody>
        <tr>
            <td class="border-0">
                <div class="row">
                    <div class="col-md text-center text-md-left mb-3 mb-md-0">
                        <a href="index.php"><img class="logo img-fluid mb-3" src="https://jibuco.com/wp-content/uploads/2016/02/White-Transparent-Logo-Jibu.png" style="max-height: 140px;"/></a>
                        <br>

                        <h2 class="mb-1">Jibu</h2>
                        Nyanza, Southern Province, Rwanda<br>
                        support@jibu.co / 0788 888 888<br>
                    </div>

                    <div class="col text-center text-md-right">

                        <!-- Dont' display Bill To on mobile -->
                        <span class="d-none d-md-block">
                            <h1>Billed To</h1>
                        </span>

                        <h4 class="mb-0">
                          <?php
                            echo $_SESSION['user'];
                          ?>
                        </h4>

                        Address<br/>
                        <?php echo $address; ?><br/>
                          <?php
                            echo $_SESSION['user'].'@test.com<br/>';
                          ?>

                        <h5 class="mb-0 mt-3"><?php $date ?></h5>
                    </div>
                </div>
            </td>
        </tr>
        </tbody>
    </table>

    <!-- Invoice items table -->

    <table class="table">
        <thead>
        <tr>
            <th>Summary</th>
            <th class="text-right">Price</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <h5 class="mb-1">
                  <?php
                switch ($type) {
                  case 20:
                      echo '20L Jerrycan';
                      break;
                  case 19:
                      echo '18.9L Bottle';
                      break;
                  case 7:
                      echo '7L Bottle';
                      break;
                  case 5:
                      echo '5L Jerrycan';
                      break;
                  case 1:
                      echo '1L Aluminium';
                      break;
                  default:
                      echo 'None';
                }
                  ?>
                </h5>
                Quantity: <?php echo $quantity; ?> item(s)
            </td>
            <td class="font-weight-bold align-middle text-right text-nowrap">
              <?php
                echo $price;
                echo ' RWF';
              ?>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="text-right border-0 pt-4"><h5>Total: <?php echo $price * $quantity; ?> RWF</h5></td>
        </tr>
    </table>

    <!-- Thank you note -->

    <h5 class="text-center pt-2">
        Thank you for your custom!
    </h5>
    <button onclick="window.print()">Print this page</button>
</div>
</body>
</html>
