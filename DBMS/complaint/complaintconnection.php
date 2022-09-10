<?php
	$number= $_POST['number'];
	$complaint = $_POST['complaint'];
	


	$conn = new mysqli('localhost','root','','courier');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into complaint (ID_no,Your_Complaint) values(?, ?)");
		$stmt->bind_param("is", $number,$complaint);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>