<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../DBinternet/css/dbinternet.css">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>
    <h1 style="text-align: center;">Insert New Data | Created By Mike D | Started February 2019</h1>

    <form action="../DBinternet/phpInclude/createInclude.php" method = "POST">
        <input type="text" name="fname" placeholder="Please Enter First name">
        <br><br>
        <input type="text" name="mname" placeholder="Please Enter Middle name">
        <br><br>
        <input type="text" name="lname" placeholder="Please Enter Last name">
        <br><br>
        <input type="text" name="entrant" placeholder="Please Enter Entrant">
        <br><br>
        <button type="submit" name="submit">Sign Up</button>
    </form>

    <?php
   
        require "../DBinternet/phpInclude/connect.php";

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connection_error);
        }
        
        include "../DBinternet/phpInclude/close.php";
    ?>
</body>
</html>