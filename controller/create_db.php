<?php
    require_once(__DIR__ . "/../model/config.php");
    //it is checking if the file exists in the model folder
   
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
    