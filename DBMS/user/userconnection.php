<?php
	$username = $_POST['username'];
	$address= $_POST['address'];
	$address_to_be_delivered = $_POST['address_to_be_delivered'];


	$conn = new mysqli('localhost','root','','courier');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into user (username,address,address_to_be_delivered ) values(?, ?, ?)");
		$stmt->bind_param("sss", $username, $address, $address_to_be_delivered );
		$execval = $stmt->execute();
		echo $execval;
		echo "order sussccefully placed";
		$stmt->close();
		$conn->close();
	}
?>