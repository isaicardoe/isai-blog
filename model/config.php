<?php
   require_once(__DIR__ . "/database.php");
   //
   
   $path = "/cardosoi-blog/";
   //creating a string and path to the blog
   
   $host = "localhost";
   $username = "root";
   $password = "root";
   $database = "blog_db";
   //this is all the host information
   
   $connection = new Database($host, $username, $password, $database);
