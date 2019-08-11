<?php
if( isset($_POST['text']) ){
    $text = $_POST['text'];
 }

if( !empty($text)){

    mysql_connect('localhost','root','') or die('couldnt connect');
    mysql_select_db('a_database') or die('couldnt access database');

    $query = "INSERT INTO data VALUES('','".mysql_real_escape_string($text)."') ";
    if($query_run = mysql_query($query)){
        echo 'data inserted';
    }else{
        echo 'insert failed';
    }

   
} else{
    echo 'type something';
}
?>