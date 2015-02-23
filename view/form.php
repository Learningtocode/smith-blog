<?php 
 require_once(__DIR__ . "/../model/config.php"); 
 require_once(__DIR__ . "/../controller/login-verify.php"); 
  
//If you are not a user, you can not see the form.  
//Die kills off the program.  
//These lines of codes can be place in other locations.
 if(!authenticateUser()) { 
     header("Location: " . $path . "index.php");
     die();
 }
?>
 
<h1>Create Blog Post</h1>
 
<!--Method="post" is to send information and action is where it will take place.-->
<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
    <div> 
        <label for="title">Title: </label> 
        <input type="text" name="title" />
    </div> 
         
    <div>
        <label for="post">Post: </label> 
        <textarea name="post"></textarea> 
    </div> 
     
    <div> 
        <button type="submit">Submit</button>
    </div>
</form>