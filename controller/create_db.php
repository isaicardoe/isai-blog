<?php
  require_once(__DIR__ . "/../model/database.php");
  //it is checking if the file exists in the model folder
  $connection = new mysqli($host, $username, $password);
  //checking if the host and stuff is their
  if($connection->connect_error) {
      die("Error: " . $connection->connect_error);
  }
  //if the connection to the server is not their run to the next function and if it is die and show error
  $exists = $connection->select_db($database);
  //if the connetion to the server is connected to the database sever 
  if(!$exists) {
      $query = $connection->query("CREATE DATABASE $database");
  //if it dosnt connect echo that you need to create a data base
      if($query) {
          echo "Successfully created database: " . $database;
  //
      }
  }
    else {
      echo "Database already exists";
  //
    }
    
    $query = $connection->query("CREATE TABLE posts {"
            . "id int(11) NOT NULL AUTO_INCREMENT,"
            . "title varchart(255) NOT NULL"
            . "post text NOT NULL,"
            . "PRIMARY KEY (id)");
  //
  $connection->close();
  //