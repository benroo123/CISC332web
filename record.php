<!DOCTYPE html>
<html lang="en">

<head>
	<title>Make new records | Covid Vaccination Database | CISC 332</title>
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
	<a href="./newPatient.php">Add a Patient</a>
	<a href="./vaccine.php">Vaccine Status</a>
	<a href="./searchPatient.php">Search for a Patient</a>
	<a href="./searchWorker.php">Search for a Worker</a>

</nav>
<main>
	<h1>Make a New Record</h1>
	<hr size="8" width="100%" color="black"> 
	<p>Hint: a patient should be added into the database first in order to make a record.</p>

	<form action="newRecord.php" method="post">
	The OHIP of the patient: <input type="text" name="OHIP"><br><br>
    The lot of the vaccine: <input type="text" name="lot"><br><br>
	The clinic: <br>
	<input type="radio" name="vaxClinic" value="WuMing">WuMing<br>
	<input type="radio" name="vaxClinic" value="CPharmacy">CPharmacy<br>
	<input type="radio" name="vaxClinic" value="Target">Target<br>
	<input type="radio" name="vaxClinic" value="Costco">Costco<br>
	<input type="radio" name="vaxClinic" value="GreatPharmacy">GreatPharmacy<br>
	<input type="radio" name="vaxClinic" value="GoodHealth">GoodHealth<br>

	<input type="submit" value="Add">
    </form>
    <?php
    $connection =- NULL;
    ?>
</main>
<footer>
	<div id="copyright">
		&copy; 2022 CISC332 Covid Vaccination Database - Zeyuan Liu.
	</div>    
</footer>

</body>
</html>