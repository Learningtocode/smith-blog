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
<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>" action="uploader.php" enctype="multipart/form-data">
    <div> 
        <label for="title">Title: </label> <input type="text" >
        <input type="text" name="title" />
    </div> 
         
    <div>
        <label for="post">Post: </label> 
        <textarea name="post"></textarea> 
    </div> 
     <fieldset>
        <input type="hidden" name="MAX_FILE_SIZE" value="61440">
        <input type="file" name="upload" id="upload">
        <input type="submit" value="Upload">
    </fieldset>
    <div> 
        <button type="submit" class="btn btn-default">Submit</button>
    </div>
</form> 
