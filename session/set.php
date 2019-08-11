<?php

//do this first
session_start();

$_SESSION['username']='Anthony'; //now this value is available for all pages using the session

echo 'session set';

?>

<br>
<a href="view.php"> View </a>