<?php
    include('connection.php');
    include('dataOperation.php');
    if(isset($_POST['orders']))
    {
        $customerId=$_POST['customerID'];
        $customerName=$_POST['customerName'];
        $address=$_POST['address'];
        $phone=$_POST['phone'];
        $quantity = $_POST['quantity'];
        $type=$_POST['type'];
        switch ($type) {
            case 20:
                $price = 1500;
                break;
            case 19:
                $price = 1700;
                break;
            case 7:
                $price = 900;
                break;
            case 5:
                $price = 700;
                break;
            case 1:
                $price = 2200;
                break;
            default:
                $price = 0;

        }
        $table = "orders";
        $destinationArray = "customerID,customerName,address,phoneNumber,quantity,price,discount,processed,date";
        $sourceArray = stringCopact3($customerId,$customerName,$address).",".stringCopact3($phone,$quantity,$price).",".stringCopact2(0, false);
        $query = insertDatas($table,$destinationArray,$sourceArray);
        $res = mysqli_query($dbcon,$query);
        if($res){
            echo "<meta http-equiv='refresh' content='0;url=../order.php?yes=0#here'>";
        }else{
            echo "<meta http-equiv='refresh' content='0;url=../order.php?no=0'>";
        }
    }
?>