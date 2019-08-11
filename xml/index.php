<?php

    $xml = simplexml_load_file('example.xml');
          
    echo $xml->producer[0]->name.'<br>';
    echo $xml->producer[1]->name.' is '.$xml->producer[1]->age.'<br>';
    echo $xml->producer[2]->age.'<br><br>';

    foreach ($xml->producer as $producer){
        echo  $producer->name.' is '.$producer->age.'<br>';
    }
?>
