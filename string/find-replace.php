<?php

if ( (isset($_POST['user_input'])) && (!empty($_POST['user_input'])) ){

    $user_input = $_POST['user_input'];
    $user_search = $_POST['user_search'];
    $user_replace = $_POST['user_replace'];
    echo $new_text= str_replace($user_search,$user_replace,$user_input);

}


?>

<hr> <!-- horizontal line -->
<form action="find-replace.php" method="POST">
    <textarea name="user_input" cols="30" rows="10"><?php echo $user_input; ?></textarea><br><br>
    <input type="text" name="user_search"  value="search for"><br><br>
    <input type="text" name="user_replace" value="replace with"><br><br>
    <input type="submit" value="Find & Replace">
</form>