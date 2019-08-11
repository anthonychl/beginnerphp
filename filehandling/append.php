<?php

$handle = fopen('names.txt','a');

fwrite($handle,"\n".'Anthony'."\n");


fclose($handle);



?>