<?php

$browser = get_browser(null,true);
//print_r($browser);
echo $browser['browser'].'<br><br>';

$browser = strtolower($browser['browser']);

if($browser != 'chrome'){
    echo 'you are not using Google Chrome, please do';
}



?>