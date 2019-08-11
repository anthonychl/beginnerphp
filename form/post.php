<?php

$match = 'passwordis123';

//check if it's been submitted with isset() function
if(isset($_POST['user']) && isset($_POST['password'])){
    //check if values are empty
    if(empty($_POST['user']) || empty($_POST['password'])){
        echo 'Please fill the form and submit again';
    }else{
        if($_POST['password'] == $match){
            echo 'Welcome '.$_POST['user'].'<br>';
        }else{
            echo 'Password is incorrect';
        }

    }
}

?>

<form action="post.php" method="POST">
    User:<br><input type="text" name="user" /><br>
    Password:<br><input type="password" name="password" /><br><br>
    <input type="submit" value="Submit" />

</form>