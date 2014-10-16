<?php
  require_once ("../model/database.php");
  
  $conection = new mysqli($host, $username, $password);
  
  if($connection->connect_error) {
      
  }
  else {
      echo "Success";
  }