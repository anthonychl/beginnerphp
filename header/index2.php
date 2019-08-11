<?php
 // ob_start();
?>

<h1>My Page</h1>
<hr>
<?php
$redirect_page = 'http://localhost';
$redirect = false;

if($redirect == true){
    header('Location:'.$redirect_page);
}


?>