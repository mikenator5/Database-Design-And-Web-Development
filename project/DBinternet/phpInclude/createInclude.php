<?php
    include_once 'connect.php';

    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $entrant = $_POST['entrant'];

    $sql = "INSERT INTO customer(fname, mname, lname, entrant) VALUES ('$fname', '$mname', '$lname', '$entrant');";

    mysqli_query($conn, $sql);

    include 'close.php';
    header("Location: ../../DBMenuPage/index.php?newEntry=success");
