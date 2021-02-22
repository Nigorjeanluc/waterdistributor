<?php
session_start();
include("connection.php");
	if(isset($_POST['submit'])){
		$name = htmlentities($_POST['name']);
        $password = htmlentities($_POST['password']);
		$sql= "SELECT * FROM customers WHERE name='$name' AND password='$password'";
		$res= mysqli_query($dbcon,$sql);
		$row= mysqli_fetch_array($res);
		if(isset($row)){
			$_SESSION['user']=$row['name'];
			$_SESSION['user_id']=$row['id'];
			$_SESSION['user_phone']=$row['phoneNumber'];
			$_SESSION['user_address']=$row['address'];
			echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;url=../login.php?yes=0'>";
		}
	}
?>