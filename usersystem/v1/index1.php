<?php
/*para saber el hash md5
echo md5('pass123');
*/
require 'connect.inc.php';
require 'core.inc.php';


if(loggedin()){
    echo 'You are logged in. <a href="logout.php">Log Out</a>';
}else{
    include 'loginform.inc.php';
}

?>

<html>
    <hr>
    <h1>My Page</h1>
</html>


