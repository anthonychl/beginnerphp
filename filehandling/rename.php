<?php

$filename = 'filetorename.txt' ;
$rand = rand(10000,99999);


if(@ rename($filename, $rand.'.txt') ){
    echo "File <b>$filename</b> has been renamed to <b>$rand.txt</b><br>";
}else{
    echo 'cannot rename the file';
}



?>