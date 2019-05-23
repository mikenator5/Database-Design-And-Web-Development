<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../DBinternet/css/dbinternet.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>DB Update | Created By Mike D | Started February 2019</h1>

    <form action="../DBinternet/phpInclude/update.php" method = "POST">
        <input type="text" name="ID" placeholder="ID">
        <br><br>
        <input type="text" name="fname" placeholder="First Name">
        <br><br>
        <input type="text" name="mname" placeholder="Middle Name">
        <br><br>
        <input type="text" name="lname" placeholder="Last Name">
        <br><br>
        <input type="text" name="entrant" placeholder="Entrant">
        <br><br>
        
        <button type="submit" name="Go Back">Update</button>
    </form>
</body>
</html>