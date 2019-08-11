<?php

function hit_count(){
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $ip_file = file('ip.txt');

    foreach($ip_file as $ip){
        $trimmed_ip = trim($ip);
        if( $ip_address != $trimmed_ip){
             $found = false;
        }else{
             $found = true;
             echo 'we have that IP already '.$ip_address;
             break;
        }

    }

    if($found == false){
        $filename = 'count.txt';
        $handle = fopen($filename,'r');
        $current = fread($handle,filesize($filename));
        fclose($handle);

        echo $current_inc = $current +1;
        echo '<br>';

        $handle2 = fopen($filename,'w');
        fwrite($handle2,$current_inc);
        fclose($handle2);

        echo 'IP not found. It is a new IP '.$ip_address.'<br>';
        $handle3 = fopen('ip.txt','a');
        fwrite($handle3,$ip_address."\n");
        fclose($handle3);

    }

}


?>