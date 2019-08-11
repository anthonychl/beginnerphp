<?php

require 'confip.inc.php';


foreach($ip_blocked as $ip) {

     if($ip == $ip_address){
        die('your ip address '.$ip_address.' has been blocked');

     }

}

echo 'your ip address:'.$ip_address.' is valid';


?>

<br><br>
<h1>Remote address</h1>
<hr>
