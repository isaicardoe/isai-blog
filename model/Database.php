<?php

class Database {

    private $connection;
    private $host;
    private $username;
    private $password;
    private $database;

    //private stuff for your database like your password,and others above 
    //only for the host user stuff
    //we created this class beacause it is easier to read and manage and way cleaner
    //it is better for blobs of code like this instead of writing a lot of code and it is easier 
    //to call and when you call it it runs faster and slimpler for the user to use and you can use over and over 
    //instead of writing it like 10 times 
    //when you call it again it makes a new instance of a consistant object 
    //makes it a global varible so we can access then whenver
    //you want to
    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
        
        $this->connection = new mysqli($host, $username, $password);
        //checking if the host and stuff is their
  
      if($this->connection->connect_error) {
        die("<p>Error: " . $connection->connect_error . "</p>");
    }
      //if the connection to the server is not their run to the next function and if it is die and show error
  
      $exists = $this->connection->select_db($database);
      //if the connetion to the server is connected to the database sever 
  
      if(!$exists) {
        $query = $this->connection->query("CREATE DATABASE $database");
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
    
    }

    //this stores the global varibles and stores then in the varibles assign to them 
    // the this-> assigns them and makes them public for many uses
    //to save informaton of the user
    public function openConnection() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->connection->connect_error) {
            die("<p>Error: " . $this->connection->connect_error . "</p>");
        }
    }
    //this is checking if the connection with the host things is connecting or not if it is connected stop the 
    //function stop running it because it was opening the function in the begining   
    public function closeConnection() {
       if(isset($this->connection)) {
           $this->connection->close(); 
       }  
    }
    //to close and stop the function after checking if it works or not but stop the function
    public function query($string) {
        $this->openConnection();
        
        $query = $this->connection->query($string);
        
        $this->closeConnection();
        
        return $query;
    }
    //
}
