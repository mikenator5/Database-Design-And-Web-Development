<?php


    if(isset($_GET['name'])) {
      $name = htmlentities($_GET['name']);
      //print_r($_GET);
    }

    if(isset($_GET['email'])) {
      $email = htmlentities($_GET['email']);
    }
  /*
    if(isset($_POST['name'])) {
      $name = htmlentities($_POST['name']);
      echo $name;
    }

    if(isset($_REQUEST['name'])) {
      $name = htmlentities($_REQUEST['name']);
      echo $name;
    }
    */
    echo $_SERVER['QUERY_STRING'];
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Document</title>
  <link rel="stylesheet" href="../css/index.css">
</head>

<body>
  <form method = "GET" action = "get_post.php" style="text-align: center;">
    <div>
      <label>Name</label><br>
      <input type="text" name = "name">
    </div>
    <div>
      <label >Email</label><br>
      <input type="text" name = "email">
    </div>
    <input type="submit" value="Submit">
  </form>
  <ul>
    <li>
      <a href="get_post.php?name=Brad&email=Brad@Bradmail.com">Brad</a>
    </li>
    <li>
      <a href="get_post.php?name=Mike&email=Mike@Mikemail.com">Mike</a>
    </li>
    <li>
      <a href="get_post.php?email=Mike@Mikemail.com">Mike Email</a>
    </li>
    <li>
      <a href="get_post.php?email=Bob@Bobmail.com">Bob Email</a>
    </li>
  </ul>
  <h1><?php
  if (isset($_GET['name'])) {
    echo "{$name}'s Profile" . "<br>";
  }
  if (isset($_GET['email'])) {
    echo "{$email}";
  }
  ?>
  </h1>

  <?php include '../php/footer.php' ?>
</body>

</html>
