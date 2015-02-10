<?php 
    //Require once takes the code in the in another folder and place it in here.
    require_once(__DIR__ . "/../model/config.php"); 

    //Die means our program will stop running if there is an error.
    if($connection->connect_error) {
        die("<p>Error: " . $connection->connect_error . "</p>");
    }  
     
    //We are going to select that data base in our file.  
    //The server will either say true or not true of the function.
    $exists = $connection->select_db($database); 
      
    //Remember ! means it does not.  
    //Queries are questions to the data base in this case we are sending commands. 
    if(!$exists) {
        $query = $connection->query("CREATE DATABASE $database"); 
          
    //The dot is use to concatenate or link varibles of code.   
        if($query) {
            echo "<p>Successfully created database: " . $database . "</p>";
        }
    } 
    //Since the code will only run when the database doesn't exist, it will only run once if the database was sucessfully created. 
    //This else statement will only apply if the database already exists.
    else {
        echo "<p>Database already exists.</p>";
    } 
    //The name of this table is posts which is a table that stores all the posts on the blog. 
    //NOT NULL means the id can never be empty. AUTO_INCREMENT will give each post a unique id automatically. 
    //255 will be the maxium number of charaters within the title.
    $query = $connection->query("CREATE TABLE posts ("
            . "id int(11) NOT NULL AUTO_INCREMENT," 
            . "title varchar(255) NOT NULL," 
            . "post text NOT NULL," 
            . "PRIMARY KEY (id))");  
     
    if($query) {
        echo "<p>Successfully created table: posts</p>";
    } 
    else {
        echo "<p>$connection->error</p>";
    }
    
   
    $connection->close();