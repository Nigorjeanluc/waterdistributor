<?php
    include('connection.php');
    include('dataOperation.php');
    if(isset($_POST['approve']))
    {
        $name=$_POST['distributor_name'];
        $phone=$_POST['phone_number'];
        $address=$_POST['Address'];
        $quantity=$_POST['quantity'];
        $type= $_POST['type'];
        $price= $_POST['price'];
        $table = 'vieworder';
        // $destinationArray = "phone_number,phone_number,Address,quantity,processed,date";
        // $sourceArray = stringCopact3($name,$phone,$address).",".stringCopact2($quantity,true);
        // $query = insertDatas($table,$destinationArray,$sourceArray);
		$sql0= "SELECT * FROM stock WHERE product_id='$type'";
		$res0= mysqli_query($dbcon,$sql0);
		$row= mysqli_fetch_array($res0);
        if(isset($row)) {
            $rest = $row['amount'] + $quantity;
            $sql2 = editOne($dbname, 'stock', 'amount', $rest, 'id', $row['id']);
            $sql = editOne($dbname,'vieworder', 'processed', true, 'id', $_POST['id']);
            $res2 = mysqli_query($dbcon, $sql);
            $res3 = mysqli_query($dbcon, $sql2);
            if($res2 && $res3){
                echo "<meta http-equiv='refresh' content='0;url=../dashboard/distributorOrders.php?yes=0#here'>";
            }else{
                echo "<meta http-equiv='refresh' content='0;url=../dashboard/distributorOrders.php?no=0'>";
            }
        }
    }
?>