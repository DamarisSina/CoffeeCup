<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Coffee Cup | Welcome</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

	<header class="header_container">
		<nav class="navbar">
	  		<a class="navbar-brand" href="http://localhost/CursWeb2017/proiect/index.html">
	   			 <img src="logo.png" width="80" height="80" alt="CoffeeLogo">
	  		</a>
	  		<div class="navigation">
				<ul class="nav">
				  <li class="nav-item">
				    <li class="nav-item">
				    <a class="nav-link active" href="index.html">Coffee</a>
				  </li>
				    <a class="nav-link active" href="meniu.html">Meniu</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link active" href="locatii.html">Locatii</a>
				  </li>
				  <li class="nav-item">
				  	<a class="nav-link active" href="contact.html">Contact</a>
				  </li>
				  </ul>
			</div>					
		</nav>
	</header>

	<?php
		$servername= "localhost";
		$username= "root";
		$password= "";
		$dbName= "coffeecup";

		//Create connection
		$conn= new mysqli($servername, $username, $password, $dbName);
		//Check connection
		if ($conn->connect_error) {
			die("Connection failed".$conn->connect_error);
		}
		$query= mysqli_query($conn, "select * from clienti");
	 ?>
	 <section id="about">
	     <div class="container-table">
		 <table>
		 	<tr>
		 		<th>Id</th>
		 		<th>Prenume</th>
		 		<th>Nume</th>
		 		<th>Email</th>
		 		<th>Comentariu</th>
		 	</tr>
		 

		<?php 
			while ($row= mysqli_fetch_array($query)) {
				echo "<tr>";
				echo "<td>".$row['Id']."</td>";
				echo "<td>".$row['Nume']."</td>";
				echo "<td>".$row['Prenume']."</td>";
				echo "<td>".$row['Email']."</td>";
				echo "<td>".$row['Comentariu']."</td>";
				echo "</tr>";
				}
				mysqli_close($conn);

		 ?>
		</table>
		</div>
	</section>
   <footer>
   		<p>Coffee Cup, Copyright &copy; 2017 </p>
   </footer>
