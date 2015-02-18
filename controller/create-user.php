<?php  
//This file is to create the user and store the user in our new database. 
    require_once(__DIR__ . "/../model/config.php"); 
     
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL); 
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);  
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING); 
     
    echo $password;  
    //Video 43 error
    $salt = "$5$" . "rounds=5000$" . uniqid(nt_rand(), true) . "$";
  
    echo salt;