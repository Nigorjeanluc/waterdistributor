<?php
    include('connection.php');
    include('dataOperation.php');
    if(isset($_POST['approve']))
    {
        $name=$_POST['distributor_name'];
        $phone=$_POST['phone_number'];
        $address=$_POST['Address'];
        $quantity=$_POST['quantity'];
        $amount = $quantity * 60;
        $table = 'vieworder';
        // $destinationArray = "phone_number,phone_number,Address,quantity,processed,date";
        // $sourceArray = stringCopact3($name,$phone,$address).",".stringCopact2($quantity,true);
        // $query = insertDatas($table,$destinationArray,$sourceArray);
        $sql = editOne($dbname,'vieworder', 'processed', true, 'id', $_POST['id']);
        $res2 = mysqli_query($dbcon, $sql);
        if($res2){
            echo "<meta http-equiv='refresh' content='0;url=../dashboard/distributorOrders.php?yes=0#here'>";
        }else{
            echo "<meta http-equiv='refresh' content='0;url=../dashboard/distributorOrders.php?no=0'>";
        }
    }
?>