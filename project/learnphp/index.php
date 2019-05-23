<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <h2>My First PHP test -- Mike D</h2>
  <h2>What is important so far?</h2>

  <ol>
    <li>Instead of index.html we use index.php</li>
    <li>PHP begins with &lt;?php </li>
  </ol>

  <?php
    echo "My First PHP script! nts: I am echoing this from inside of php tags"
  ?>

<br>
<hr>
<br>

  <h2>Connecting to MySQL using MySQLi OO!</h2>
  <?php
  /*
    $servername = "localhost";
    $username = "root";
    $password = "toor";

    // Create connection
    $conn = new mysqli($servername, $username, $password);


    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

    // Create database
    $sql = "CREATE DATABASE myDB";

    if ($conn->query($sql) === TRUE) {
      echo "Database created successfully";
    } else {
      echo "Error creating database" . $conn->error;
    }
    $conn->close();
    */
  ?>

<br>
<hr>
<br>

  <h2>PHP Creating a Database! And a Table!</h2>

  <?php
  $servername = "localhost";
  $username = "root";
  $password = "toor";
  $dbName = "A4phpvet";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbName);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  // Create database
  $sql = "CREATE DATABASE IF NOT EXISTS A4phpvet";
  if ($conn->query($sql) === TRUE) {
      echo "Database created successfully";
  } else {
      echo "Error creating database: " . $conn->error;
  }

  // sql to create table
  $sql = "CREATE TABLE IF NOT EXISTS MyGuests (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  reg_date TIMESTAMP
  )";

  if ($conn->query($sql) === TRUE) {
      echo "Table MyGuests created successfully";
  } else {
      echo "Error creating table: " . $conn->error;
  }

  mysqli_query($conn,'TRUNCATE TABLE MyGuests;');

  $sql = "INSERT IGNORE INTO MyGuests (firstname, lastname, email)
  VALUES ('John', 'Doe', 'john@example.com');";
  $sql .= "INSERT IGNORE INTO MyGuests (firstname, lastname, email)
  VALUES ('Mary', 'Moe', 'mary@example.com');";
  $sql .= "INSERT IGNORE INTO MyGuests (firstname, lastname, email)
  VALUES ('Julie', 'Dooley', 'julie@example.com')";

  if ($conn->multi_query($sql) === TRUE) {
      $last_id = $conn->insert_id;
      echo "New records created successfully. Last inserted ID: $last_id";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
  ?>

<br>
<hr>
<br>


</body>
</html>
