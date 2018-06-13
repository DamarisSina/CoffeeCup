<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Tabelul masinilor</h1>
	<table>
		<tr>
			<th>First name</th>
			<th>Last name</th>
			<th>Brand</th>
			<th>Model</th>
			<th>Color</th>
			<th>Fuel</th>
			<th>Year</th>
	</tr>
		<?php
		$servername= "localhost";
		$username= "root";
		$password="";
		$dbName= "parc";

		$conn= new mysqli($servername, $username, $password, $dbName);
		if ($conn->connect_error) {
			die("Connection failed".$conn->connect_error);
		}

		$query= mysqli_query($conn, "select * from masini");
		while ($row= mysqli_fetch_array($query)) {
			echo "<tr>";
			echo "<td>".$row["Nume"]."</td>";
			echo "<td>".$row["Prenume"]."</td>";
			echo "<td>".$row["Marca"]."</td>";
			echo "<td>".$row["Model"]."</td>";
			echo "<td>".$row["Culoare"]."</td>";	
			echo "<td>".$row["Combustibil"]."</td>";
			echo "<td>".$row["An"]."</td>";
			echo "<tr>";		
		}
		mysqli_close($conn);
		?>
</table>
</body>
</html>