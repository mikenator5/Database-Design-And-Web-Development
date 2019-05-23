<?php
    include_once 'connect.php';

    $id = $_POST['ID'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $entrant = $_POST['entrant'];

    $sql = "UPDATE customer SET fname = '$fname', mname= '$mname', lname = '$lname', entrant = '$entrant' WHERE ID_customer = $id;";

    if ($conn->query($sql) === TRUE) {
        header( 'Location: ../../DBMenuPage/index.php?Entry=Updated' ) ;
        include 'close.php';
    } else {
        echo "Error updating record: " . $conn->error;
        include 'close.php';
    }
 
?>