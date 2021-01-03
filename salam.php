<?php
$distributor_id = filter_input(INPUT_POST,'distributor_id');
$distributor_name= filter_input(INPUT_POST,'distributor_name');
$phone_number = filter_input(INPUT_POST,'phone_number');
$Address = filter_input(INPUT_POST,'Address');
$quantity= filter_input(INPUT_POST,'quantity');
if (!empty($distributor_id)) {
	$host ="localhost";
	$dbdistributor_id="root";
	$dbdistributor_name="root";
	$dbphone_number="root";
	$dbAddress="root";
	$dbquantityd="";
	$dbname = "waterdistribution";
	$conn = new mysqli($host,$dbdistributor_id,$dbdistributor_name,$dbphone_number,$dbAddress,$dbquantity,$dbname);


	if (mysqli_connect_error()){
	
	die('Connect Error('. mysqlI_connect_errno().')'.mysql_connect_error());
	}
	else{
	$sql ="INSERT INTO view distributor(distributor_id,distributor_name,phone_number,Address,quantity)
	values ('$distributor_id','$distributor_name','$phone_number','$Address','$quantity')";
	if($conn->query($sql)){
		echo "New record inserted sucessfull";}
	else{echo"error:".$sql."<br>".$conn->error;}
	$conn->close();
}
}

}

?>	