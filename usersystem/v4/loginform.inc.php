<?php

if(isset($_POST['username']) && isset($_POST['password'])){

    if(!empty($_POST['username']) || !empty($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $md5 = md5($password);
        $query = "SELECT id FROM users2 WHERE username = '".mysql_real_escape_string($username)."' AND password ='$md5' ";
        if($query_run = mysql_query($query)){
            if(mysql_num_rows($query_run)==0){
                echo 'Invalid username/password';
            }else{
                //echo 'Logged in successfully, '.$username;
                $user_id = mysql_result($query_run,0,'id');
                $_SESSION['user_id'] = $user_id;
                header('Location: index1.php');
            }
        }

    }else{
        echo 'Fill the form';
    }
}


?>


<form action="<?php $current_page?>" method="POST">
    Username: <input type="text" name="username"/>
    Password: <input type="password" name="password"/>
    <input type="submit" value="Log in"/>
    <a href="register.php"> Register </a>
</form>
