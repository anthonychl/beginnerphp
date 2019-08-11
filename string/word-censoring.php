<?php

$find = array('alex','billy','dale');
$replace = array('a**x','b***y','d**e');

if ( (isset($_POST['user_input'])) && (!empty($_POST['user_input'])) ){
    //echo $user_input = $_POST['user_input'];
    $user_input = $_POST['user_input'];

    echo $censored = str_ireplace($find,$replace,$user_input);

}


?>

<hr> <!-- horizontal line -->
<form action="word-censoring.php" method="POST">
    <textarea name="user_input" cols="30" rows="10"><?php echo $user_input; ?></textarea><br><br>
    <input type="submit" value="Submit">
</form>