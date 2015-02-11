<?php 
    require_once(__DIR__ . "/../model/config.php"); 

    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING); 
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING); 
     
    //Establish a connection to the database and then in quotes a command.  
    //We want to set a title and post.  
    //QUERY: A REQUEST FOR INFORMATION FROM A DATABASE
   $query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'");  
    
   //This if statement is to ensure that the work above was successful.
   if($query) {
       echo "<p>Successfully inserted post: $title</p>";
   } 
   else {
       echo "<p>$connection->error</p>";
   }
   
     
   
  
    