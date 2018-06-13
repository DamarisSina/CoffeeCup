<?php
	// Get values from form
	$firstName= $_POST["firstname"];
	$lastName= $_POST["lastname"];
	$email= $_POST["email"];
	$comentariu= $_POST["comentariu"];
	

	// Prepare db conection 
	$servername= "localhost";
	$username= "root";
	$password= "";
	$dbName= "coffeecup";

	// Create connecion
	$conn= new mysqli($servername, $username, $password, $dbName);
	// Check connection
	if ($conn->connect_error) {
		die("Connection_failed: ".$conn->connect_error);
	}

	//Prepare Stmt and bind values
	$stmt= $conn->prepare("INSERT INTO clienti (Nume,Prenume,Email,Comentariu) VALUES (?,?,?,?)");
	$stmt->bind_param("ssss", $firstName, $lastName, $email, $comentariu);
	$stmt->execute();


	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	header('Location: clienti.php');

?>