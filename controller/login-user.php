<?php
    require_once(__DIR__ . "/../model/config.php");  
    //We now have access to our database. 
     
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING); 
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);  
   
    //We are just selecting the password and salt from our users table specifically to the variable username.
    $query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE BINARY username = '$username'"); 
      
    //We are going to check if there is at less one piece of info in our query.
    //Num_rows will teell us how many rows we get from the database.
    if($query->num_rows == 1) {
        $row = $query->fetch_array(); 
         
        if($row["password"] === crypt($password, $row["salt"])){  
    //We want to store whether or not the user has be authenticated.        
            $_SESSION["authenticated"] = true;
            echo "<p>Login Successful!</p>";
        } 
        else {
           echo "<p>Invalid username and password1</p>"; 
        }
    } 
    else {
        echo "<p>Invalid username and password2</p>";
    }


