<html lang="en">

<head>
	<title>New Patient | Covid Vaccination Database | CISC 332<!DOCTYPE html></title>
	<meta charset="utf-8"/>
	<meta name="author" content="Zeyuan Liu"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif&display=swap" rel="stylesheet"> 

	<link rel="stylesheet" href="./css/left.css"> 	
</head>

<body>
<?php
include 'connectdb.php';
?>
<nav>
	<img id="logo" src="./img/vaccine1.png" alt=""/>
	<a href="./covid.html">Home Page</a>
	<a href="./record.php">Make a New Record</a>
	<a href="./vaccine.php">Vaccine Status</a>
    <a href="./searchPatient.php">Search for a Patient</a>
	<a href="./searchWorker.php">Search for a Worker</a>

</nav>
<main>
	<h1>The information of the new patient</h1>
	<hr size="8" width="100%" color="black"> 
	<ol>
<?php
    // $OHIP= $_POST["OHIP"];
    $first = $_POST["firstName"];
    $last =$_POST["lastName"];
    $dob = $_POST["dob"];
    $query1= 'select max(OHIP) as maxid from patient';
    $result= $connection->query($query1);
    $row=$result->fetch();
    $newkey = intval($row["maxid"]) + 1;
    $OHIP = (string)$newkey;
    $query2 = 'INSERT INTO patient values("' . $OHIP . '","' . $first . '","' . $last . '","' . $dob . '")';
    $numRows = $connection->exec($query2);
    echo "New patient has been added!<br>";
	echo "<tr><td>". "OHIP:" . " ".$OHIP."<br></td></tr>";
    echo "<tr><td>". "First Name:"." ".$first."<br></td></tr>";
    echo "<tr><td>". "Last Name:"." ".$last."<br></td></tr>";
	echo "<tr><td>". "Date of Birth:"." ".$dob;
    $connection =- NULL;
?>
</ol>
</main>
<footer>
	<div id="copyright">
		&copy; 2022 CISC332 Covid Vaccination Database - Zeyuan Liu.
	</div>    
</footer>

</body>
</html>