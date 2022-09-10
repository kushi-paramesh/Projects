<?php
	$name = $_POST['name'];
	$phno = $_POST['phno'];
	$address = $_POST['address'];


	$conn = new mysqli('localhost','root','','courier');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into staff (staff_name,phone_no,address) values(?, ?, ?)");
		$stmt->bind_param("sis", $name, $phno, $address);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>