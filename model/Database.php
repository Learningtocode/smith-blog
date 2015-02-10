<?php
//Class name usually has to have the same name as the file. 
//Private menas you are only able to access the variable in this file. 
//A constructer will build the object so we can use it. 
//The variables below in class Database are global variables.
class Database {
    private $connection; 
    private $host; 
    private $username; 
    private $password; 
    private $database; 
    
    public function __construct($host, $username, $password, $database)  {   
       //$this is relating to the varaibles in the class Database.
       $this->host = $host; 
       $this->username = $username;  
       $this->password = $password;
       $this->database = $database;
    }  
    //Establishing a connection to our database.
    public function openConnection() {  
     //Mysqli is the object that will connect us to the database. 
    //The variables in the parenthesis are four parameters.
        $this->connection = new mysquli($this->host, $this->username, $this->password, $this->database); 
         
        //Die means our program will stop running if there is an error.
        if ($this->connection->connect_error) {
            die("<p>Error: " . $this->connection->connect_error . "</p>");
        }  
    } 
     
    public function closeConnection() {
       //The purpose of this if statement is to check if I actually opened  the connection.  
       //Isset whether or not the variable has been set and if the is information present in the variable.
        if(isset($this->connection)) {
      //You must remember to close your connection to the database.  
            $this->connection->close(); 
        }
    } 
     
    public function query($string) {
        //The $this->openConnection is calling upon that function. 
        $this->openConnection(); 
         
        //Below is query the connection we have. 
        $query = $this->connection->query($string); 
        
        $this->closeConnection(); 
         
        return $query;
    }
}

