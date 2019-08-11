<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'a_database';

class ServerException extends Exception{}
class DataBaseException extends Exception{}

try{

    if(!@mysql_connect($host,$user,$pass)){
        throw new ServerException('cannot connect to server');
    }else if(!@mysql_select_db($db)){
            throw new DataBaseException('cannot select database');
    }else{
            echo 'connected';
            //do something
    }

}catch(ServerException $ex){

    echo "Error: ".$ex->getMessage();

}catch(DatabaseException $ex){

    echo "Error: ".$ex->getMessage();
}
?>