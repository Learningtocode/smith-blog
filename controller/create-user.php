<?php  
//This file is to create the user and store the user in our new database. 
    require_once(__DIR__ . "/../model/config.php"); 
 
//This make sures to validate inputs from users trying to login.
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL); 
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);  
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING); 
     
    $salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$"; 
 
//Crypt returns a string encyrted using algoriithms like Blowfish.
    $hashedPassword = crypt($password, $salt);  
 
//Makes your usernames case sensitive 
//The database goes over the exact usernamme and will let you know if ther is a userrname that's the same. 
    $use = $_SESSION["connection"]->query("SELECT username FROM users WHERE username='" . $username . "'"); 
    $ema = $_SESSION["connection"]->query("SELECT username FROM users WHERE email ='" . $email . "'");
       
//If username is greater than 0, following the exact specific requirements.
    if (!$use->num_rows > 0 && !$ema->num_rows > 0) {
    $query = $_SESSION["connection"]->query("INSERT INTO users SET "
            . "email = '$email',"
            . "username = '$username',"
            . "password = '$hashedPassword',"
            . "salt = '$salt'");

    if ($query) {
        echo "Successfully created user: $username";
    } else {
        echo "<p>" . $_SESSION["connection"]->error . "</p>";
    }
} else {
    echo "<p>The username and or email is already registered to the account.</p>";
}
    