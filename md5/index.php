<?php
/*
$string = 'password';
$string_hash = md5($string);

echo $string_hash;
*/

// by the way the password is: password

if(isset($_POST['password']) && !empty($_POST['password'])){
    $string = $_POST['password'];
    $string_hash = md5($string);

    $handle = fopen('hash.txt','r');
    $hashed_password = fread($handle,filesize('hash.txt'));
    fclose($handle);

    if($string_hash == $hashed_password){
        echo 'Password match';
    }else{
        echo 'Wrong password, try again';
    }
}else{
    echo 'Enter a password <br>';
}

?>

<form action="index.php" method="POST">
    Password :<input type="password" name="password" />
    <br><input type="submit" />
</form>