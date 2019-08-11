<?php

class DatabaseConnect {
    public function __construct($host,$user,$pass){
        echo 'Attempting connection...';
        if($this->Connect($host,$user,$pass)){
             echo 'Connected to '.$host;
         }else{
             echo 'Connection failed';
         }
    }

    public function Connect($host,$user,$pass){
        //return @mysql_connect($host,$user,$pass);

        if(@mysql_connect($host,$user,$pass))
            return true;
        else
            return false;
    }
}

$connection = new DatabaseConnect('localhost','root','');
?>