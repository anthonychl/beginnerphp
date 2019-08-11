<?php

mysql_connect('localhost','root','');
mysql_select_db('a_database');

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(!empty($username) && !empty($password)){

        echo $username.'<br>'.$password.'<br>';
        //echo $query = "SELECT id FROM users3 WHERE username = '".mysql_real_escape_string($username)."' AND password = '".mysql_real_escape_string($password)."' ";
        $query = "SELECT id FROM users3 WHERE username = '$username' AND password = '$password' ";
        $query_run = mysql_query($query);

        if(mysql_num_rows($query_run)==1){
            echo 'login success';
        }else{
            echo 'invalid username/password';
        }

    }
}

?>

<form action="index1.php" method="POST">
    username <input type="text" name="username"/><br>
    password <input type="text" name="password"/><br>
    <input type="submit" />

</form>