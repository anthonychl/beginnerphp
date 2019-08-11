<?php

if(isset($_POST['roll'])){
    echo 'you rolled a : 'rand(1,6);
}


?>

<form action="rand2.php" method="POST">
    <input type="submit" name="roll" value="Roll dice" />

</form>