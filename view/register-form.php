<?php 
 require_once(__DIR__ . "/../model/config.php");
?> 

<h1>Register</h1>  
 
<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>"> 
    <!--Each div is a section for like the username, password, and ect.-->
    <div>  
        <label for="email">Email: </label> 
        <input type="text" name="email" />
    </div> 
     
    <div>  
        <label for="username">Username: </label> 
        <input type="text" name="username" />
    </div> 
      
  <!--The reason why we put password is because we don't want the letters showing when typing.-->
    <div> 
        <label>Password: </label>  
        <input type="password" name="password"/>
    </div> 
   
    <div>
       <button type="submit">Submit</button>
    </div>
</form>