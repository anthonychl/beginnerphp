<?php
require 'connect.inc.php';

if(isset($_POST['search_name'])){
    $search_name = $_POST['search_name'];
    if(!empty($search_name)){

        if(strlen($search_name) > 3){
            $query = "SELECT name FROM names WHERE name LIKE '%".mysql_real_escape_string($search_name)."%'";
            $query_run = mysql_query($query);

            if(mysql_num_rows($query_run) >= 1){
                echo 'results found<br>';
                while($row = mysql_fetch_assoc($query_run)){
                    echo $row['name']."<br>";
                }
            }else{
                echo 'no results';
            }
        }else{
            echo 'key word must be longer than 3 chars';
        }

    }
}

?>

<form action="index5.php" method="POST">
    Name: <input type="text" name="search_name"/>
    <input type="submit" value="search" />
</form>
