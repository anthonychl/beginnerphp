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
$http_referer = $_SERVER['HTTP_REFERER'];

function loggedin(){
    if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
        return true;
    }else{
        return false;
    }
}

?>