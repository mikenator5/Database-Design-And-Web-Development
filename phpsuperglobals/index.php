<?php include 'server-info.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/index.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Superglobals</title>
</head>
<body>

  <h1>PHP Superglobals! - Mike D - Dec 2018</h1>
  <hr>
  <br>


   <div class="container">
     <h1>Server & File Info</h1>
     <?php if($server): ?>
        <ul class="list-group">
        <?php foreach($server as $key => $value): ?>
            <li class="list-group-item">
              <strong><?php echo $key ?>: </strong>
              <?php echo $value; ?>
            </li>
        <?php endforeach; ?>
      </ul>
     <?php endif; ?>
   </div>

   <div class="container">
     <h1>Server & File Info</h1>
     <?php if($client): ?>
        <ul class="list-group">
        <?php foreach($client as $key => $value): ?>
            <li class="list-group-item">
              <strong><?php echo $key ?>: </strong>
              <?php echo $value; ?>
            </li>
        <?php endforeach; ?>
      </ul>
     <?php endif; ?>
   </div>

<h4 style="text-align: center;">This information above is about the server. This information shows the IP address of the host server. It shows where the file is located, what version of Apache is installed, and the location of the file</h4>

  

</body>
</html>
