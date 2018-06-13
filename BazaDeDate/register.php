<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Backend</h1>
<?php

	$serverName= "localhost";
	$userName= "root";
	$password= "";
	$dbName= "parc";

	$conn= new mysqli($serverName, $userName, $password, $dbName);
	if($conn->connect_error){
		die("Connection failed".$conn->connect_error);
	}


	$firstName= $_POST["first_name"];
	$lastName= $_POST["last_name"];
	$brand= $_POST["brand"];
	$model= $_POST["model"];
	$year= $_POST["year"];
	$color= $_POST["color"];
	$fuel= $_POST["fuel"];

echo $firstName.$lastName.$brand.$model.$year.$color.$fuel;

	$stmt= $conn->prepare("INSERT INTO masini
		(Prenume,Nume,Marca,Model,An,Culoare,Combustibil)
		VALUES (?,?,?,?,?,?,?)");
	$stmt->bind_param("ssssiss", $firstName, $lastName, $brand, $model, $year, $color, $fuel);
	$stmt->execute();

	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	header('Location: cars.php');

?>
</body>
</html>