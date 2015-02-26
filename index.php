<?php 
//This require_once below will take the information from header and footer place it into here. 
    require_once(__DIR__ . "/view/header.php");
    require_once(__DIR__ . "/controller/login-verify.php");   
//Navigation only gets display only if the user is log in.  
    if(authenticateUser()) {
        require_once(__DIR__ . "/view/navigation.php"); 
        require_once(__DIR__ . "/controller/create-db.php"); 
        require_once(__DIR__ . "/controller/create-post.php");
    } 
    require_once(__DIR__ . "/controller/read-posts.php");
    require_once(__DIR__ . "/view/footer.php"); 
?> 


