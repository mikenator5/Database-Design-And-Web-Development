<?php
    include_once 'connect.php';

    $search = $_POST['search_bar'];
    
    $sql = "SELECT * FROM customer WHERE lname LIKE '$search%';";

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

    include 'close.php';
?>