<?php
    include('connection.php');
    include('dataOperation.php');
    if(isset($_POST['approve']))
    {
        $name=$_POST['customerName'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $quantity=$_POST['quantity'];
        $price = $_POST['price'];
        $amount = $quantity * $price;
        $table = 'distributor_sales';
        $destinationArray = "customerName,address,phone,quantity,amount,date";
        $sourceArray = stringCopact3($name,$address,$phone).",".stringCopact2($quantity,$amount);
        $query = insertDatas($table,$destinationArray,$sourceArray);
        $sql = editOne($dbname,'orders', 'processed', true, 'id', $_POST['id']);
        $res = mysqli_query($dbcon,$query);
        $res2 = mysqli_query($dbcon, $sql);
        if($res && $res2){
            echo "<meta http-equiv='refresh' content='0;url=../dashboard/orders.php?yes=0#here'>";
        }else{
            echo "<meta http-equiv='refresh' content='0;url=../dashboard/orders.php?no=0'>";
        }
    }
?>