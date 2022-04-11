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
    <a href="./searchPatient.php">Search for a Patient</a>
	<a href="./searchWorker.php">Search for a Worker</a>

</nav>
<?php
include 'connectdb.php';
?>
<main>
	<h1>The data of the chosen vaccine:</h1>
	<hr size="8" width="100%" color="black"> 
	<!-- <h3>Please pick one clinic in the following table, the information of nurses and doctocs who work in the clinic will be shown.</h3> -->
    <form action="getDetailedVaccine.php" method="post">
	<?php
	include 'getVaccine.php';
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