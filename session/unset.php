<?php

session_start();

unset($_SESSION['username']);//destroys a specific session

/*
session_destroy();
destroys all sessions if we've declared more than one on set.php
i.e.:
$_SESSION['username'] = 'anthony';
$_SESSION['age'] = 26;
*/

echo 'logged out'

?>

<br>
<a href="set.php">set session again</a>    