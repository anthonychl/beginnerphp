<h1>My Page</h1>
<hr>

<?php
$redirect_page = 'http://www.google.com';
$redirect = true;

if($redirect == true){
    header('Location:'.$redirect_page);
}


?>