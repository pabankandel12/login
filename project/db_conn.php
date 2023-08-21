<?php

define ('DB_HOST','localhost');
define ('DB_User','root');
define ('DB_Password','');
define ('DB_Database','usrinfo');

class DatabeseConnection{
    public function _construct(){
define ('DB_Password','');
       $conn = new mysqli(DB_HOST,DB_User,DB_Password,DB_Database);
       if($conn->connect_error){
        die("<h1> Database Connection Failed </h1>");
       }
       return $this->$conn =$conn;
    }
}