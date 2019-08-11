<?php
function hit_count(){
    $filename = 'count.txt';
    $handle = fopen($filename,'r');
    $current = fread($handle,filesize($filename));
    fclose($handle);

    echo $current_inc = $current +1;

    $handle2 = fopen($filename,'w');
    fwrite($handle2,$current_inc);
    fclose($handle2);

}


?>