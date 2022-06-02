<?php
	$name = $_POST['name'];
	$rollNumber = $_POST['rollNumber'];
	$gender = $_POST['gender'];
    $phoneNumber = $_POST['phoneNumber'];
    $otp = $_POST['otp'];
	$email = $_POST['email'];
	$conformPassword = $_POST['conformPassword'];
	//create new database and insert fields

	// Database connection
	$conn = new mysqli('localhost','root','','aptitude');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else { 
		 /// $stmt = $conn->prepare("insert into registration(firstName, rollNumber, gender, phoneNumber, otp, email, password, conformPassword) values(?, ?, ?, ?, ?, ?, ?, ?)");
		$sql = "insert into registration name, rollNumber, gender, phoneNumber, otp, email, conformPassword values($name, $rollNumber, $gender, $phoneNumber, $otp, $email, $conformPassword)";  
		if (mysqli_query($conn, $sql)) {
			echo "New record created successfully";
		  } else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		  }
		  	mysqli_close($conn);
           
		// $stmt->bind_param("sssiisss", $firstName, $rollNumber, $gender, $phoneNumber, $otp, $email, $password, $conformPassword);
		/* $execval = $sql->execute();
		echo $execval;
		echo "<h1>Registration successfully...</h1>";
		$stmt->close();
		$conn->close();*/ 
	}
?>