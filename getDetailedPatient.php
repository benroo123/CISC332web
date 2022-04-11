<html lang="en">

<head>
	<title>Patient Information | Covid Vaccination Database | CISC 332<!DOCTYPE html></title>
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
	<a href="./searchWorker.php">Search for a Worker</a>

</nav>
<?php
include 'connectdb.php';
?>
<main>
<h1>Here is the vaccination information of the patient:</h1>
<hr size="8" width="100%" color="black"> 
<table>
<?php
    $name= $_POST["patients"];
    $pa='SELECT * FROM patient, vaccination, vaccine WHERE vaccination.vaccineLot=vaccine.lot AND patient.OHIP=vaccination.patientOHIP AND patient.OHIP="' . $name . '"';
    // echo $pa;
    $result=$connection->query($pa);

    while ($row=$result->fetch()) {
        echo "<tr><td>". "OHIP:" . " ".$row["OHIP"]."</td></tr>";
        echo "<tr><td>". "First Name:"." ".$row["firstName"]."</td></tr>";
        echo "<tr><td>". "Last Name:"." ".$row["lastName"];
        echo "<tr><td>". "Clinic:"." ".$row["vaxClinic"];
		echo "<tr><td>". "Company:"." ".$row["producedBy"];
		echo "<tr><td>". "Lot Number:"." ".$row["lot"];
		echo "<tr><td>". "Date:"." ".$row["date"];
    }
    

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