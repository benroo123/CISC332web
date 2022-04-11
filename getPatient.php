<?php
   $query = "SELECT * FROM patient";
   $result = $connection->query($query);

   while ($row = $result->fetch()) {
        echo '<input type="radio" name="patients" value="';
        echo $row["OHIP"];
        echo '">' . $row["OHIP"] . "  ". $row["firstName"] .  "  ". $row["lastName"] . "<br>";
   }
?>