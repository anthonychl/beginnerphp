<?php

require 'connect.inc.php';

//$query = "SELECT food, calories FROM food ORDER BY id DESC";
//$query = "SELECT food, calories FROM food WHERE healthy_unhealthy ='h' ORDER BY id DESC";
$query = "SELECT food, calories FROM food WHERE healthy_unhealthy ='h' AND calories=100 ORDER BY id DESC";

if($query_run = mysql_query($query)){
    echo 'Query success<br><br>';
    if(mysql_num_rows($query_run)==NULL){
            echo 'No results for that query';
    }else{
        while($row = mysql_fetch_assoc($query_run)){
            $food = $row['food'];
            $calories = $row['calories'];
            echo $food.' has '.$calories.' calories<br>';
        }
    }
}else{
    echo 'Query failed<br><br>';
    echo mysql_error();
}


?>