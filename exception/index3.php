<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'a_database';

class ServerException extends Exception{
    public function showSpecific(){
        return 'Cannot connect to server.Error on line '.$this->getLine().' in '.$this->getFile();
    }
}
class DataBaseException extends Exception{
    public function showSpecific(){
        return 'Cannot select database.Error on line '.$this->getLine().' in '.$this->getFile();
    }
}

try{

    if(!@mysql_connect($host,$user,$pass)){
        throw new ServerException();
    }else if(!@mysql_select_db($db)){
        throw new DataBaseException();
    }else{
            echo 'connected';
            //do something
    }

}catch(ServerException $ex){

    echo $ex->showSpecific();

}catch(DatabaseException $ex){

    echo $ex->showSpecific();
}
?>