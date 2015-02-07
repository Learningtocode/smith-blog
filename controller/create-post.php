<?php 
    require_once(__DIR__ . "/../model/database.php"); 
     
    //Mysqli is the object that will connect us to the database. 
    //The variables in the parenthesis are four parameters.
    $connection = new mysqli($host, $username, $password, $database);
    
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING); 
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING); 
    
    echo "<p>Title: $title</p>"; 
    echo "<p>Post: $post</p>"; 
     
    //You must remember to close your connection. 
    $connection->close();
    