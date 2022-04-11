

<?php
   $query = "SELECT * FROM vaxclinic";
   $result = $connection->query($query);
//    echo "Which clinic does the worker you want to check work at? </br>";
   while ($row = $result->fetch()) {
        echo '<input type="radio" name="clinics" value="';
        echo $row["name"];
        echo '">' . $row["name"] ."<br>";
        // echo '">' . $row["name"] . " Which locates at " . $row["street"] . " " . $row["city"]. " " . $row["province"]."<br>";
   }
?>