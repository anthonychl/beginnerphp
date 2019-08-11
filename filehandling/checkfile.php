<?php

$filename = 'newfile.txt';

if( file_exists($filename) ){
    echo 'File already exists';
}else{
    $handle = fopen($filename, 'w');
    fwrite($handle,'this was written into the file');
    fclose($handle);

}




?>