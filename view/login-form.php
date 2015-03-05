<?php
     require_once(__DIR__ . "/../model/config.php");
?>  

<h1>Login</h1> 
   
<!--Method is how we are sending the information via php.-->
<form class="form-inline" method="post" action="<?php echo $path . "controller/login-user.php"?>">
     <div class="form-group" >  
        <label for="username" for="exampleInputName2">Username: </label> 
        <input type="text" name="username"  class="form-control" id="exampleInputName2" placeholder="Jane Doe"/>
    </div> 
      
  <!--The reason why we put password is because we don't want the letters showing when typing.-->
    <div  class="form-group"> 
        <label for="exampleInputPassword2">Password: </label>  
        <input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Password"/>
    </div> 
<!--The Submit button is to upload the info the user has provided.-->
    <div>
       <button type="submit" class="btn btn-default">Submit</button>
    </div>
</form>

