<?php 
 require_once(__DIR__ . "/../model/config.php");
?>  
 
<h1>Register</h1>  
  
<form class="form-group" method="post" action="<?php echo $path . "controller/create-user.php"; ?>"> 
    <!--Each div is a section for like the username, password, and ect.-->
    <div class="form-group">  
        <label  for="email" for="exampleInputEmail1">Email: </label>  
        <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
    </div> 
     
    <div class="form-group">  
        <label for="username" for="exampleInputName1">Username: </label>  
        <input type="text" name="username" class="form-control" id="exampleInputName1" placeholder="Username"/>
    </div> 
      
  <!--The reason why we put password is because we don't want the letters showing when typing.-->
    <div class="form-group"> 
        <label for="exampleInputPassword1">Password: </label>  
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div> 
   
    <div>
       <button type="submit" class="btn btn-default" >Submit</button>
    </div>
</form>