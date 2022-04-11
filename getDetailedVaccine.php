<html lang="en">

<head>
	<title>Vaccine Information | Covid Vaccination Database | CISC 332<!DOCTYPE html></title>
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
<h1>Here is the detailed information of the vaccine:</h1>
<hr size="8" width="100%" color="black"> 
<table>
<?php
    $vaccine= $_POST["patients"];
    $pa='SELECT * FROM shipsto, vaccine WHERE shipsto.lotNumber=vaccine.lot AND vaccine.producedBy="' . $vaccine . '"';
    // echo $pa;
    $result=$connection->query($pa);
    echo "Detailed information of:". " " .$vaccine;

	echo "<table border='1'>
	<tr>
	<th>Clinic</th>
	<th>Lot</th>
	<th>Dose</th>
	</tr>";
 
    while ($row=$result->fetch()) {
        // echo "<tr><td>". "Clinic:" . " ".$row["clinic"]."<tr><td>". "Lot:" . " ".$row["lot"]."<tr><td>". "Dose:" . " ".$row["doses"]."</td></tr>";
		echo "<tr>";
		echo "<td>" . $row['clinic'] . "</td>";
        echo "<td>" . $row['lot'] . "</td>";
        echo "<td>" . $row['doses'] . "</td>";
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