<?php
    include_once 'connect.php';

    $delete = $_POST['delete'];

    $sql = "DELETE FROM customer WHERE ID_customer=$delete";

    if ($conn->query($sql) === TRUE) {
        header( 'Location: ../../DBMenuPage/index.php?Entry=Deleted' ) ;
        include 'close.php';
    } else {
        echo "Error deleting record: " . $conn->error;
        include 'close.php';
    }
 
?>