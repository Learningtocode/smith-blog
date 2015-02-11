<?php 
    require_once(__DIR__ . "/database.php");
//$path is helping us access files within our database.    
    $path = "/smith-blog/"; 
     
    $host = "localhost"; 
    $username = "root"; 
    $password = "root";  
//Helping us to easily access our database.
    $database = "blog_db"; 
     
//New Database is the object that will be stored in connection. 
//Connection is the the connection to our local data base.  
    $connection = new Database($host, $username, $password, $database);
