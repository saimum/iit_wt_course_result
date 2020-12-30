<?php

    require_once('db_con.php');

    
    $sql = "SELECT name FROM course";
    $result = execute_query($sql);

    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<br>". $row["name"]."<br>";
        }
    } else {
        echo "0 results";
    }