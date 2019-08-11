<?php
/*
this example wont work in a localhost
if it doesnt provide that service
for instance if running xampp

or working offline
*/

$to = 'you@asite.org';
$subject = 'this is an email';
$message = "this is a test email\n Hope you got it".
$headers = 'From: me@mysite.org';
/*
the header address doesnt have to be real i.e.:
donotreply@mysite.org
autoreply@mysite.org

*/
if( mail($to,$subject,$message,$headers) ){
    echo 'email has been sent';
}else{
    echo 'error sending the email';
}


?>