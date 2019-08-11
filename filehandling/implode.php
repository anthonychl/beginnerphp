<?php


$names_array = array('Alex','Sam','Steve');

$string = implode(':',$names_array);

echo $string;

$handle = fopen('names3.txt','w');
fwrite($handle,$string);

?>