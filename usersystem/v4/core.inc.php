<?php
/*
$_SERVER['SCRIPT_NAME']
guarda la url de la pagina donde se llama
la variable

aunq en este ejemplo la variable se usa en
loginform.inc.php, al ser index1.php
quien incluye a loginform.inc.php
la url q toma es la de index1.php
*/

/*
$_SERVER['HTTP_REFERER']
dice el url de la pagina q venimos
*/

ob_start();
session_start();
$current_page = $_SERVER['SCRIPT_NAME'];

if(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER']))
    $http_referer = $_SERVER['HTTP_REFERER'];

function loggedin(){
    if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
        return true;
    }else{
        return false;
    }
}

function getfield($field){
    $query = "SELECT $field FROM users2 WHERE id ='".$_SESSION['user_id']."'";
    if($query_run = mysql_query($query)){
        if($result = mysql_result($query_run,0,$field)){
             return $result;
        }
    }

}

?>