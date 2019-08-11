<?php

session_start();

if(!isset($_POST['secure'])){
    $_SESSION['secure'] = rand(1000,9999);
}else{
    if( $_SESSION['secure'] == $_POST['secure']){
        echo "A match!<br>";
        //header('Location: somewhere.php')
    }else{
        echo 'Incorrect, try again.<br>';
        $_SESSION['secure'] = rand(1000,9999);
    }

}

?>
<img src="generate.php" /><br>

<!--
<?php
echo $_SESSION['secure'];

?>
-->
<form action="index1.php" method="POST">
    Type the value you see:
    <input type="text" name="secure" size="6"/>
    <input type="submit" />

</form>
