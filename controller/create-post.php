<?php
  require_once(__DIR__ . "/../model/database.php");
  //getting the database php file out of the model folder
 
  $connection = new mysqli($host, $username, $password, $database);
  //getting all the userstuff and saving them in the varibles
 
  $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
  $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
  //making varbles and saving them in the postand title varibles we created
 
  $query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'");
  //you are creating a title and post database to save in the query table we created and the connection 
  //is inserting the pot and title inside the table and storing it
 
  if($query) {
      echo "<p>Successfully inserted post: $title</p>";  
  }
  else {
      echo "<p>$connection->error</p>";
  }
 
  $connection->close();
  //it stops the connection varble that was running