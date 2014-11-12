<?php
 require_once(__DIR__ . "/../model/database.php");
 //getting the database php file out of the model folder
 
 $connection = new mysqli($host, $username, $password, $database);
 //getting all the userstuff and saving them in the varibles
 
 $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
 $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
 //making varbles and saving them in the postand title varibles we created
 
 echo "<p>Title: $title</p>";
 echo "<p>Post: $post</p>";
 //echoing that it was saved in the varibles we created 
 
 $connection->close();
 //it stops the connection varble that was running