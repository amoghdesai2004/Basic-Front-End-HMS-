<?php
	$fullName = $_POST['fullName'];
	$email = $_POST['email'];
	$date = $_POST['date'];
	$department = $_POST['department'];
	$doctor = $_POST['doctor'];

	// Database connection
	$conn = new mysqli('localhost','root','','users');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(fullName, email, date, department, doctor) values(?, ?, ?, ?, ? )");
		$stmt->bind_param("sssssi", $fillName, $email, $date, $department, $doctor);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>