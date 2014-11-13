<?php
  require_once(__DIR__ . "/../model/config.php");
  //it is checking if the file exists in the model folder
  $connection = new mysqli($host, $username, $password);
  //checking if the host and stuff is their
  if($connection->connect_error) {
      die("<p>Error: " . $connection->connect_error . "</p>");
  }
  //if the connection to the server is not their run to the next function and if it is die and show error
  $exists = $connection->select_db($database);
  //if the connetion to the server is connected to the database sever 
  if(!$exists) {
      $query = $connection->query("CREATE DATABASE $database");
  //if it dosnt connect echo that you need to create a data base
      if($query) {
          echo "<p>Successfully created database: " . $database . "</p>";
  //if it does connect to echo successfully created database
      }
  }
    else {
      echo "<p>Database already exists</p>";
  //echo database already exists
    }
    
    $query = $connection->query("CREATE TABLE posts ("
            . "id int(11) NOT NULL AUTO_INCREMENT,"
            . "title varchar(255) NOT NULL,"
            . "post text NOT NULL,"
            . "PRIMARY KEY (id))");
  //you are creating a table for the connection  
    
    if($query) {
        echo "<p>Succesfully create table: posts</p>";
    }   
  //if the table was made to echo this out
    else {
        echo "<p>$connection->error</p>";  
    }
    //if the table wasnt created echo this and which is error
  $connection->close();
  //stop the connection function here to end