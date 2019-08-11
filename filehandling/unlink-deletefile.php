<?php

$filename = 'filetodelete.txt' ;
if ( @ unlink($filename)) {    // @ avoids that the webbrowser shows a Warning if the file doesnt exists
    echo 'file <b>'.$filename.'</b> has been deleted';
}else{
    echo 'cannot delete file';
}


?>