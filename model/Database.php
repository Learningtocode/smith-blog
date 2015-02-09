<?php
//Class name usually has to have the same name as the file. 
//Private menas you are only able to access the variable in this file. 
//A constructer will build the object so we can use it. 
class Database {
    private $connection; 
    private $host; 
    private $username; 
    private $password; 
    private $database; 
     
    public function __construct($host, $username, $password, $database) {
       $this->host = $host; 
       $this->username = $username;  
       $this->password = $password;
       $this->database = $database;
    }  
    //Establishing a connection to our database.
    public function openConnection() {
        $this->connection = new mmysquli($this->host,);
    } 
     
    public function closeConnection() {
        
    } 
     
    public function query($string) {
        
    }
}

