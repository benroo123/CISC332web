<?php
   $query = 'SELECT DISTINCT producedBy FROM vaccine';
   $result = $connection->query($query);
//    echo "Which clinic does the worker you want to check work at? </br>";
   while ($row = $result->fetch()) {
        echo '<input type="radio" name="patients" value="';
        echo $row["producedBy"];
        echo '">' . $row["producedBy"] ."<br>";
   }
?>