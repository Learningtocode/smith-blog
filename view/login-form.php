<?php
     require_once(__DIR__ . "/../model/config.php");
?>  
 
<h1>Login</h1> 
   
<!--Method is how we are sending the information via php.-->
<form method="post" action="<?php echo $path . "controller/login-user.php"?>">
     <div>  
        <label for="username">Username: </label> 
        <input type="text" name="username" />
    </div> 
      
  <!--The reason why we put password is because we don't want the letters showing when typing.-->
    <div> 
        <label>Password: </label>  
        <input type="password" name="password"/>
    </div> 
<!--The Submit button is to upload the info the user has provided.-->
    <div>
       <button type="submit">Submit</button>
    </div>
</form>

