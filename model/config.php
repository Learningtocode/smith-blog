<?php 
    $path = "/smith-blog/"; 
     
    $host = "localhost"; 
    $username = "root"; 
    $password = "root"; 
    $database = "blog_db"; 
     
//New Database is the object that will be stored in connection. 
//Connection is the the connection to our local data base.  
    $connection = new Database($host, $username, $password, $database);
