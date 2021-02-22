<?php
    include('connection.php');
    include('dataOperation.php');
    if(isset($_POST['approve']))
    {
        $id = $_POST['id'];
        $product_id = $_POST['product_id'];
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
        $sql = editOne($dbname,'orders', 'processed', true, 'id', $id);
		$sql0= "SELECT * FROM stock WHERE product_id='$product_id'";
		$res0= mysqli_query($dbcon,$sql0);
		$row= mysqli_fetch_array($res0);
        if(isset($row)) {
            $rest = $row['amount'] - $quantity;
            if ($rest <= 0) {
                echo "<meta http-equiv='refresh' content='0;url=../dashboard/orders.php?noo=0'>";
            } else {
                $sql2 = editOne($dbname, 'stock', 'amount', $rest, 'id', $row['id']);
                $res = mysqli_query($dbcon,$query);
                $res2 = mysqli_query($dbcon, $sql);
                $res3 = mysqli_query($dbcon, $sql2);
                if($res && $res2 && $res3){
                    echo "<meta http-equiv='refresh' content='0;url=../dashboard/orders.php?yes=0#here'>";
                }else{
                    echo "<meta http-equiv='refresh' content='0;url=../dashboard/orders.php?no=0'>";
                }
            }
        }
    }
?>