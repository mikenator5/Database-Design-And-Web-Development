<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dbinternet.css">
    <title>Document</title>
</head>
<body>
    <h1 id="myTitle">Database on the REAL Internet! / Created by Mike D / Started January 2019</h1>

    <?php

        echo '<h3>Starting remote DB connection... </h3>';
       
        require "phpInclude/connect.php";
        
        
        // Read DB
        $sql = "SELECT ID_customer, fname, mname, lname, entrant FROM customer";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            echo "<table><tr><th>ID</th><th>fname</th><th>mname</th><th>lname</th><th>entrant</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row['ID_customer']. "</td><td>" . $row['fname']. "</td><td> " . $row['mname'] . " </td><td>" . $row['lname']. "</td><td> " . $row['entrant'] ."</td></tr>";
            }
            echo "</table>";

        } else {
            echo "<br>No results";
        }

        include "phpInclude/close.php";
    ?>

</body>
</html>