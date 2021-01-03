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
        $destinationArray = "distributor_name,phone_number,Address,quantity,processed,date";
        $sourceArray = stringCopact3($name,$phone,$address).",".stringCopact2($quantity,false);
        // $query = insertDatas($table,$destinationArray,$sourceArray);
        $sql = "UPDATE SET distributor_name = '".$name."', phone_number = '".$phone."', Address = '".$address."', quantity = '".$quantity."', processed = false WHERE id = ".$_POST['id'];
        // $res = mysqli_query($dbcon,$query);
        $res2 = mysqli_query($dbcon, $sql);
        echo $sql;
        if($res2){
            echo "<meta http-equiv='refresh' content='0;url=../dashboard/stock.php?yes=0#here'>";
        }else{
            echo "<meta http-equiv='refresh' content='0;url=../dashboard/stock.php?no=0'>";
        }
    }
?>