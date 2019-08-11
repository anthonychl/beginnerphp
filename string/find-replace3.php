<?php

/*
    este ejemplo tiene problema cuando lo q se busca esta al principo del texto
    pero asi estaba en el video
    mejor mi version q esta en find-replace2.php
    menos complicado y sin error
*/

$offset = 0;

if ( (isset($_POST['user_input'])) && (!empty($_POST['user_input'])) && (isset($_POST['user_search'])) && (isset($_POST['user_replace'])) ){

    $user_input = $_POST['user_input'];
    $user_search = $_POST['user_search'];
    $user_replace = $_POST['user_replace'];

    $search_length = strlen($user_search);

    if (!empty($user_input) && !empty($user_search) && !empty($user_replace)){
        $new_string = $user_input;

        while ($pos = strpos($new_string,$user_search,$offset)){
             //echo $pos.'<br>';
             /*echo*/ $offset = $pos + $search_length.'<br>';
             $new_string = substr_replace($new_string,$user_replace,$pos,$search_length);

        }
        echo $new_string;


    } else{

        echo 'Please fill all fields';
    }


}


?>

<hr> <!-- horizontal line -->
<form action="find-replace3.php" method="POST">
    <textarea name="user_input" cols="30" rows="10"><?php echo $user_input; ?></textarea><br><br>
    <input type="text" name="user_search"  value="search for"><br><br>
    <input type="text" name="user_replace" value="replace with"><br><br>
    <input type="submit" value="Find & Replace">
</form><?php



?>