<html lang="en">

<head>
	<title>Add a new Patient | Covid Vaccination Database | CISC 332<!DOCTYPE html></title>
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
	<h1>Add a New Patient</h1>
	<hr size="8" width="100%" color="black"> 
	<h3>Please enter the OHIP, name, and birthday of the new patient in the following boxes.</h3>
    <form action="addNewPatient.php" method="post">
        New Patient's First Name: <input type="text" name="firstName"><br>
		New Patient's Last Name: <input type="text" name="lastName"><br>
		New Patient's Birthday: <input type="text" name="dob"><br>
        <!-- For which customer: <br> -->
        
        <input type="submit" value="Add New Patient">
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