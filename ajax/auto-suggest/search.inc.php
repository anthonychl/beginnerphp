<?php

if( isset($_GET['search_text']) ){
    $search_text = $_GET['search_text'];
 }

if( !empty($search_text)){

    mysql_connect('localhost','root','') or die('couldnt connect');
    mysql_select_db('a_database') or die('couldnt access database');

    $query = "SELECT name FROM names WHERE name LIKE '".mysql_real_escape_string($search_text)."%' ";
    $query_run = mysql_query($query);

    while ($query_row = mysql_fetch_assoc($query_run)){
        echo $name = $query_row['name']."<br>";
    }

}

?>