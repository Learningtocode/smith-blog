<?php  
    require_once(__DIR__ . "/../model/config.php");  
    require_once(__DIR__ . "/../controller/login-verify.php");
     
    //If you are not a user, you can not have access to navigation.  
    //Die kills off the program.  
    if(!authenticateUser()) { 
     header("Location: " . $path . "index.php");
     die();
 }
?>
<nav>  
    <ul>
        <li><a href="<?php echo $path . "post.php"?>">Blog Post Form</a></li>
    </ul>
</nav>

