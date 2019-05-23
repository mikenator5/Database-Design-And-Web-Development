<?php


  // Server Side
  $server = [
      'Host Server Name' => $_SERVER['SERVER_NAME'],
      'Host Header' => $_SERVER['HTTP_HOST'],
      'Server Software' => $_SERVER['SERVER_SOFTWARE'],
      'Document Root' => $_SERVER['DOCUMENT_ROOT'],
      'Current Page' => $_SERVER['PHP_SELF'],
      'Request Method' => $_SERVER['REQUEST_METHOD'],
      'Request Time' => $_SERVER['REQUEST_TIME'],
      'Server Signature' => $_SERVER['SERVER_SIGNATURE']
  ];

  /*
  echo $server[$a].'<br>';
  echo $server[$b].'<br>';
  echo $server[$c].'<br>';
  echo $server[$d].'<br>';

  print_r($server);
  echo '<br><hr><br>';
  */
  // Client side (NTS: Server side and Client side is called 'Full Stack')
  $client = [
    'Client Side Info' => $_SERVER['HTTP_USER_AGENT'],
    'Client IP' => $_SERVER['REMOTE_ADDR'],
    'Remote Port' => $_SERVER['REMOTE_PORT']
  ];

  //print_r($client);
 ?>
