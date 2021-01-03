<?php
    include('connection.php');
    include('dataOperation.php');
    if(isset($_POST['orders']))
    {
        $distributor_name=$_POST['distributor_name'];
        $Address=$_POST['Address'];
        $phone_number=$_POST['phone_number'];
        $quantity=$_POST['quantity'];
        $table = "vieworder";
        $destinationArray = "distributor_name,phone_number,Address,quantity,date";
				$sourceArray = stringCopact3($distributor_name,$phone_number,$Address).",".stringCopact1($quantity);
        $query = insertDatas($table,$destinationArray,$sourceArray);
        $res = mysqli_query($dbcon,$query);
        if($res){
            echo "<meta http-equiv='refresh' content='0;url=../dashboard/stock.php?yes=0#here'>";
        }else{
            echo "<meta http-equiv='refresh' content='0;url=../dashboard/stock.php?no=0'>";
        }
    }
?>