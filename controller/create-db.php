 <?php  
    //Create-db's purpose as of right now is to query the database. It's to create the table for the post. 
    //Require once takes the code in the in another folder and place it in here.
    require_once(__DIR__ . "/../model/config.php");  
       
    //The name of this table is posts which is a table that stores all the posts on the blog. 
    //NOT NULL means the id can never be empty. AUTO_INCREMENT will give each post a unique id automatically. 
    //255 will be the maxium number of charaters within the title.
    $query = $connection->query("CREATE TABLE posts ("
            . "id int(11) NOT NULL AUTO_INCREMENT," 
            . "title varchar(255) NOT NULL," 
            . "post text NOT NULL," 
            . "PRIMARY KEY (id))");  
     
    if($query) {
        echo "<p>Successfully created table: posts</p>";
    } 
    else {
        echo "<p>$connection->error</p>";
    }
    
   
  