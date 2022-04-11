<html lang="en">

<head>
	<title>Worker Information | Covid Vaccination Database | CISC 332<!DOCTYPE html></title>
	<meta charset="utf-8"/>
	<meta name="author" content="Zeyuan Liu"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif&display=swap" rel="stylesheet"> 

	<link rel="stylesheet" href="./css/left.css"> 	
</head>

<body>
<nav>
	<img id="logo" src="./img/vaccine1.png" alt=""/>
	<a href="./covid.html">Home Page</a>
	<a href="./record.php">Make a New Record</a>
	<a href="./newPatient.php">Add a Patient</a>
	<a href="./vaccine.php">Vaccine Status</a>
	<a href="./searchPatient.php">Search for a Patient</a>

</nav>
<?php
include 'connectdb.php';
?>
<main>
<h1>Here are the workers work in this clinic site:</h1>
<hr size="8" width="100%" color="black"> 
<table>
<?php
   $clinic= $_POST["clinics"];
   $doctor='SELECT * FROM drworksat, doctor WHERE  drworksat.ID=doctor.ID AND drworksat.clinicname="' . $clinic . '"';

   $result=$connection->query($doctor);

   echo "<table border='1'>
	<tr>
	<th>ID</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Practice</th>
	</tr>";
    echo "Doctor:<br>";
    while ($row=$result->fetch()) {
	    // echo "<tr><td>"."Doctor:"."<tr><td>".$row["firstName"]."</td><td>".$row["lastName"]."</td></tr>";
		echo "<tr>";
		echo "<td>" . $row['ID'] . "</td>";
        echo "<td>" . $row['firstName'] . "</td>";
        echo "<td>" . $row['lastName'] . "</td>";
		echo "<td>" . $row['practiceName'] . "</td>";
    }
	echo "</table>";
    
    echo "<br>";
	
	echo "<table border='1'>
	<tr>
	<th>ID</th>
	<th>First Name</th>
	<th>Last Name</th>
	</tr>";
    echo "Nurse:<br>";
    $nurse='SELECT * FROM nurseworksat, nurse WHERE nurseworksat.ID=nurse.ID AND nurseworksat.clinicname="' . $clinic . '"';
    $result2=$connection->query($nurse);
    while ($row=$result2->fetch()) {
	    echo "<tr>";
		echo "<td>" . $row['ID'] . "</td>";
        echo "<td>" . $row['firstName'] . "</td>";
        echo "<td>" . $row['lastName'] . "</td>";
	}
	echo "</table>";
?>

</table>
<?php
   $connection = NULL;
?>
</main>
<footer>
	<div id="copyright">
		&copy; 2022 CISC332 Covid Vaccination Database - Zeyuan Liu.
	</div>    
</footer>
</body>
</html>