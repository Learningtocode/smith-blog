<?php 
    //Require once takes the code in the in another folder and place it in here.
    require_once(__DIR__ . "/../model/database.php"); 
     
    //Connection is the the connection to our local data base.
    $connection = new mysqli($host, $username, $password);
 
    //Die means our program will stop running if there is an error.
    if($connection->connect_error) {
        die("Error: " . $connection->connect_error);
    }  
     
    //We are going to select that data base in our file.  
    //The server will either say true or not true of the function.
    $exists = $connection->select_db($database); 
      
    //Remember ! means it does not.  
    //Queries are questions to the data base.in this case we are sending commands. 
    if(!$exists) {
        $query = $connection->query("CREATE DATABASE $database"); 
          
    //The dot is use to concatenate or link varibles of code.   
        if($query) {
            echo "Successfully created database: " . $database;
        }
    }
   
    $connection->close();