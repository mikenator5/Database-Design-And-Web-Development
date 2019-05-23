<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="../css/index.css">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>PHP Queries / MikeD / Nov 2018</h1>
  <hr>
  <br>
  <?php

    $servername = "localhost";
    $username = "root";
    $password = "toor";
    $dbname = "A4phpvet";

    // Create Connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check Connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, firstname, lastname, email FROM MyGuests";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // Output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"].
        " <br> First Name: ". $row["firstname"].
        " <br> Last Name: ". $row["lastname"].
        " <br> email: ". $row["email"].
        "<br><br><hr>";
      }
    } else {
      echo "0 results";
    }


    $conn->close();
   ?>



</body>
</html>
