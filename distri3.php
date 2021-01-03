<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body bgcolor="#99CC00">
 
<center>
<form method="post" action="controllers/salam.php">
<h2>distributor order<h2>
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
                </div>
                <div class="form-group">
				<h6></h6>
				   <input type="text" class="form-control" name="distributor_id" placeholder="Enter distributor id here" required />
				    </div>
					 <div class="form-group">
                  <h6>distributor Name</h6>
				  
                  <input type="text" class="form-control" name="distributor_name" placeholder="Enter distributor Name here" required />
                </div>
				
				<div class="form-group">
		
                  <h6>Phone Number:</h6>
                  <input type="text" class="form-control" name="phone_number" placeholder="Enter Phone Number here" required />
                </div>
				<div class="form-group">
				
				<h6>Address</h6>
				 <input type="text" class="form-control" name="Address" placeholder="Enter Address here" required />
				    </div>
                  <h6>Quantity:</h6>
                  <select name="quantity" class="form-control">
                    <option value="20">20L tap refill</option>
                    <option value="20">20L jerrycan refill</option>
                    <option value="18.9">18.9L tap refill</option>
                  </select>
                </div>
				<br><br>
                <div class="text-center">
                    <button class="login-btn" name="orders" type="submit">Submit</button>
                </div>
              </form>
          
</body>
</html>
