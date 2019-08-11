<?php

$handle = fopen('names.txt','w');

fwrite($handle,'Alex'."\n");
fwrite($handle,'Billy'."\n");
fwrite($handle,'Steven'."\n");
fwrite($handle,'Tom');

fclose($handle);

echo 'written' ;

?>