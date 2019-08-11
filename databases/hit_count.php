<?php
require 'connect.inc.php';

function ip_exists($ip){
    echo 'checking the IP<br>';

    $query = "SELECT ip FROM hits_ip";
    if($query_run = mysql_query($query)){

        $found = false;

        while($row = mysql_fetch_assoc($query_run)){
            $r = $row['ip'];
            if($r == $ip ){
                $found = true;
                echo 'we have that IP address already';
                break;
            }else{
                $found = false;

            }
        }

        if($found == false){
            update_count($ip);
        }

    }else{
        die(mysql_error());
    }

}

function update_count($ip){
    echo 'updating count<br>';

    $query = " SELECT count FROM hits_count";
    if(@$query_run = mysql_query($query)){
        $count = mysql_result($query_run,0,'count');
        echo $count_inc = $count+1;

        $query_update="UPDATE hits_count SET count = $count_inc ";
        mysql_query($query_update);

        add_ip($ip);

    }else{
        die(mysql_error());
    }

}

function add_ip($ip){
        echo '<br>inserting IP<br>';
        $query_insert_ip="INSERT INTO hits_ip VALUES ('$ip') ";
        if($qrun=mysql_query($query_insert_ip)){
            echo 'OK';
        }else{
           die(mysql_error());
        }
}


?>
