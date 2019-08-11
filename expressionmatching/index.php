<?php

/*
preg_match( $w, $s)

el primer parametro de la funcion es lo q queremos saber
si se encuentra en la cadena de texto q es el segundo parametro

devuelve 1 si se encontro y 0 si no

*/

$string = 'This is a string';

if(preg_match('/This/', $string)){ 
    echo 'Match found';
}else{
    echo 'No match found';
}


?>