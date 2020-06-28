<?php
$host="localhost";
$user="root";
$password="";
$dbname="waterdistribution";
$dbcon=mysqli_connect($host,$user,$password,$dbname);
if(mysqli_connect_errno())
	{
		die("Connection Failed!".mysqli_connect_error());
	}
?>