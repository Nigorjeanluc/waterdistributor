<?php
session_start();
include("connection.php");
include('dataOperation.php');
	if(isset($_POST['submit'])){
		$name = htmlentities($_POST['name']);
    $phone = htmlentities($_POST['phone']);
    $address = htmlentities($_POST['address']);
    $password = htmlentities($_POST['password']);
    $confirm_password = htmlentities($_POST['confirm-password']);
    $table = 'customers';
    $destinationArray = "name,phoneNumber,password,address,date";
    $sourceArray = stringCopact2($name, $phone).','.stringCopact2($confirm_password, $address);
    if($password === $confirm_password) {
      $query = insertDatas($table, $destinationArray, $sourceArray);
      $res1 = mysqli_query($dbcon, $query);
      $sql= "SELECT * FROM customers WHERE name='$name' AND password='$password'";
      $res= mysqli_query($dbcon,$sql);
      $row= mysqli_fetch_array($res);
      if(isset($row) && $res1 && $res){
        $_SESSION['user']=$name;
        $_SESSION['user_id']=$row['id'];
        $_SESSION['user_phone']=$phone;
        $_SESSION['user_address']=$address;
        echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
      }else{
        echo "<meta http-equiv='refresh' content='0;url=../register.php?no=0'>";
      }
    } else {
      echo "<meta http-equiv='refresh' content='0;url=../register.php?yes=0'>";
    }
	}
?>