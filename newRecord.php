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
    <h1>The new record has been made. </h1>
    <hr size="8" width="100%" color="black"> 
    <ol>
    <?php
    $num = $_POST["OHIP"];

    $result = $connection->query('SELECT count(*) as num FROM patient WHERE OHIP ="' . $num .'"');
    $row=$result->fetch();

    $newkey = intval($row["num"]);
 
    if($newkey == 0) {
        echo "Please add a new patient in the databse then return to this page to make a record. ";
        header("Location: ./newPatient.php");
    }     
    else {
        $today = date("Y-m-d"); 

        $clinic= $_POST["vaxClinic"];
        $OHIP = $_POST["OHIP"];
        $lot =$_POST["lot"];

        $query2 = 'INSERT INTO vaccination values("' . $OHIP . '","' . $clinic . '","' . $lot . '","' . $today . '")';
        // echo $query2;
        $numRows = $connection->exec($query2);
        echo "A now record has been added!<br>";
        
        echo "<br>";
        $patient = 'SELECT * FROM vaccination, patient WHERE patient.OHIP=vaccination.patientOHIP AND patient.OHIP="' . $OHIP . '"';
        $result2=$connection->query($patient);
        while ($row=$result2->fetch()) {
            echo "<tr>";
            echo "<td>OHIP: " . $row['OHIP'] . "<br></td>";
            echo "<td>First Name: " . $row['firstName'] . "<br></td>";
            echo "<td>Last Name:" . $row['lastName'] . "<br></td>";
            echo "<td>Clinic: " . $row['vaxClinic'] . "<br></td>";
            echo "<td>Lot: " . $row['vaccineLot'] . "<br></td>";
            echo "<td>Date: " . $row['date'] . "<br></td>";
        }
        $connection = NULL;
        
    }
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