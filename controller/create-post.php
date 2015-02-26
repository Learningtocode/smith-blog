<?php 
    require_once(__DIR__ . "/../model/config.php");  
     
    //If you are not a user, you can not have access to create-post.  
    //Die kills off the program.  
     
    //If not a user, the code below takes you back to index. You can't access this page.
    if(!authenticateUser()) { 
     header("Location: " . $path . "index.php");
     die();
 }

    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING); 
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);   
    $image = filter_input(INPUT_POST, "image", FILTER_SANITIZE_STRING);
     
    //Establish a connection to the database and then in quotes a command.  
    //We want to set a title and post.  
    //QUERY: A REQUEST FOR INFORMATION FROM A DATABASE
   $query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post', image = '$image'");   
 
 
   //This if statement is to ensure that the work above was successful.
   if($query) {
       echo "<p>Successfully inserted post: $title</p>";
   } 
   else {
       echo "<p>$connection->error</p>";
   }
    
   if ($imageinfo['mime'] == ("image/png" || "image/jpg" || "image/jpeg" || "image/pjpg") && $imageinfo['size']> 61440) {
if (move_uploaded_file ($_FILES['upload'] ['tmp_name'], $uploadedfile )) {
echo "<p>File successfully uploaded>/p<";
} else {
echo "<p>Failure to upload>/p<";
}
} else {
echo "<p>Your file was not accepted.>/p<";
}
    