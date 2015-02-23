<?php 
    require_once(__DIR__ . "/../model/config.php");  
     
    //If you are not a user, you can not have access to create-post.  
    //Die kills off the program.  
    if(!authenticateUser()) { 
     header("Location: " . $path . "index.php");
     die();
 }

    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING); 
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);  
  //  $date = new DateTime('today'); 
  //  $time = new DateTime('American/Los_Angles');
     
    //Establish a connection to the database and then in quotes a command.  
    //We want to set a title and post.  
    //QUERY: A REQUEST FOR INFORMATION FROM A DATABASE
   $query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'");   
 
  //  if($query) {
  //     echo "Posted on: " . $date->format("m/d/y") . "at" . $time->format("h:i");
 //  } 
 //  else {
 //      echo "<p>" . $_SESSION["connection"]->error . "</p>";
 //  } 
 
   //This if statement is to ensure that the work above was successful.
   if($query) {
       echo "<p>Successfully inserted post: $title</p>";
   } 
   else {
       echo "<p>$connection->error</p>";
   }
   
     
   
  
    