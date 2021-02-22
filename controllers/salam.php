<?php
    include('connection.php');
    include('dataOperation.php');
    if(isset($_POST['orders']))
    {
        $distributor_name=$_POST['distributor_name'];
        $Address=$_POST['Address'];
        $phone_number=$_POST['phone_number'];
        $quantity=$_POST['quantity'];
        $type=$_POST['type'];
        switch ($type) {
            case 1:
                $price = 1500 * $quantity;
                break;
            case 2:
                $price = 1700 * $quantity;
                break;
            case 3:
                $price = 900 * $quantity;
                break;
            case 4:
                $price = 700 * $quantity;
                break;
            case 5:
                $price = 2200 * $quantity;
                break;
            default:
                $price = 0;

        }
        $table = "vieworder";
        $destinationArray = "distributor_name,phone_number,Address,quantity,type,price,date";
		$sourceArray = stringCopact3($distributor_name,$phone_number,$Address).",".stringCopact3($quantity, $type, $price);
        $query = insertDatas($table,$destinationArray,$sourceArray);
        $res = mysqli_query($dbcon,$query);
        if($res){
            echo "<meta http-equiv='refresh' content='0;url=../dashboard/stock.php?yes=0#here'>";
        }else{
            echo "<meta http-equiv='refresh' content='0;url=../dashboard/stock.php?no=0'>";
        }
    }
?>