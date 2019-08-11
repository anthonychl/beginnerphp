<?php

function has_space($string){
    if(preg_match('/ /', $string)){ // buscando caracter espacio
    return true;
}else{
    return false;
}

}


$string = 'thisdoesnthaveaspace';

if(has_space($string)){
    echo 'has at least one space';
}else{
    echo 'doesnt have any spaces';
}


?>