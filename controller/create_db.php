<?php
  require_once ("../model/database.php");
  
  $conection = new mysqli($host, $username, $password);
  
  if($connection->connect_error) {
      die("Error: " . $connection->connect_error);
  }
  else {
      echo "Success" . $connection->host_info;
  }
  
  $conection->close();