<?php
    include('connection.php');
    include('dataOperation.php');
    if(isset($_POST['orders']))
    {
        $customerId=$_POST['customerID'];
        $customerName=$_POST['customerName'];
        $address=$_POST['address'];
        $phone=$_POST['phone'];
        $quantity=$_POST['quantity'];
        $table = "orders";
        $destinationArray = "customerID,customerName,address,phoneNumber,quantity,discount,processed,date";
        $sourceArray = stringCopact3($customerId,$customerName,$address).",".stringCopact3($phone,$quantity, 0).",".stringCopact1(false);
        $query = insertDatas($table,$destinationArray,$sourceArray);
        $res = mysqli_query($dbcon,$query);
        if($res){
            echo "<meta http-equiv='refresh' content='0;url=../order.php?yes=0#here'>";
        }else{
            echo "<meta http-equiv='refresh' content='0;url=../order.php?no=0'>";
        }
    }
?>