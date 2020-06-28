<?php
session_start();
include("connection.php");
	if(isset($_POST['submit'])){
		$username = htmlentities($_POST['username']);
        $password = htmlentities($_POST['password']);
		$sql= "SELECT * FROM admin WHERE username='$username' AND password='$password'";
		$res= mysqli_query($dbcon,$sql);
		$row= mysqli_fetch_array($res);
		if(isset($row)){
			$_SESSION['admin']=$row['username'];
			echo "<meta http-equiv='refresh' content='0;url=../dashboard/'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;url=../login.php?yes=0'>";
		}
	}
?>