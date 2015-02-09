<?php 
    require_once(__DIR__ . "/../model/config.php"); 
     
    //Mysqli is the object that will connect us to the database. 
    //The variables in the parenthesis are four parameters.
    $connection = new mysqli($host, $username, $password, $database);
    
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING); 
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING); 
     
    //Establish a connection to the database and then in quotes a command.  
    //We want to set a title and post. 
   $query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'");  
    
   //This if statement is to ensure that the work above was successful.
   if($query) {
       echo "<p>Successfully inserted post: $title</p>";
   } 
   else {
       echo "<p>$connection->error</p>";
   }
   
     
    //You must remember to close your connection. 
    $connection->close();
    