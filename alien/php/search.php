<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
    th, td {
        border: 1px solid black;
    }
    </style>
</head>
<body>
    
</body>
</html>
<?php
    require ('connect.php');

    $ID = $_POST['ID'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    if (isset($ID)) {
        $sql = "SELECT * FROM personalInformation WHERE IDpersonal LIKE '$ID'";
    }

    if (!empty($fname) && !empty($lname)) {
        $sql = "SELECT * FROM personalInformation WHERE fname LIKE '%{$fname}%' AND lname LIKE '%{$lname}%'";
    }

    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($result)) {

        echo "<table><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Day Born</th><th>Month Born</th><th>Year Born</th><th>Email</th><th>Phone</th><th>Street Address</th><th>City</th><th>State Address</th><th>Zip</th><th>Country</th></tr>";
        echo "<tr><td>" . $row['IDpersonal'] . "</td><td>" . $row['fname'] . "</td><td>" . $row['lname'] . "</td><td>" . $row['dayBirth'] . " </td><td>" . $row['monthBirth'] . " </td><td>" . $row['yearBirth'] . " </td><td>" . $row['email'] . " </td><td>" . $row['phone'] . " </td><td>" . $row['streetAddress']. " </td><td>" . $row['city'] . " </td><td>" . $row['stateAddress'] . " </td><td>" . $row['zip'] . "</td><td> " . $row['country'] . "</td></tr>";
        echo "</table>";
        echo "<br>";
}
    require ('close.php');
?>