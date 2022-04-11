<html lang="en">

<head>
	<title>Search Patient | Covid Vaccination Database | CISC 332<!DOCTYPE html></title>
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
	<a href="./newPatient.php">Add a Patient</a>
	<a href="./vaccine.php">Vaccine Status</a>	
	<a href="./searchWorker.php">Search for a Worker</a>

</nav>
<main>
	<h1>Search for a Patient</h1>
	<hr size="8" width="100%" color="black"> 
	<h3>Please choose the patient from the folloing list, the detailed information of the patient will be presented. </h3>
    <form action="getDetailedPatient.php" method="post">
	<?php
	include 'getPatient.php';
	?>
	<input type="submit" value="Choose">
    </form>
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