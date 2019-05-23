<?php
  //include_once 'includes/connect.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="../../css/index.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<h1>Full Stack: Read our DB, display on HTML / CSS client side</h1>
<h1>Created by MikeD / January 2019</h1>

<?php
/*
  $sql = "SELECT * FROM MyGuests;";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0 ) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo $row['firstname'] . "<br>";
    }
  }
  */
 ?>

 <p>This code is procedural. <br>This php prints everything from the table MyGuests. <br>It then, using an if / while loop, prints out the information. <br>This information it gathers, is the 'firstname' in the echo. Firstname is the name of a column in my database.</p>
 <h4><pre>&lt;php
   $sql = "SELECT * FROM MyGuests;";
   $result = mysqli_query($conn, $sql);
   // How many rows?
   $resultCheck = mysqli_num_rows($result);

   if ($resultCheck > 0 ) {
     // Echo each 'firstname' individually
     while ($row = mysqli_fetch_assoc($result)) {
       echo $row['firstname'] . "&lt;br&gt;";
     }
   }
?&gt;
</pre><h4>
  <img src="sql.png" alt="info">
<p>The code aboves, prints the 'firstname' of the information in my database!</p>
<img src="image.png" alt="SQL">


</body>
</html>
