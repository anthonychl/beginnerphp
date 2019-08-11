<?php

if(isset($_POST['contact_name']) && isset($_POST['contact_email']) && isset($_POST['contact_text'])){

    if(empty($_POST['contact_name']) || empty($_POST['contact_email']) || empty($_POST['contact_text'])){
        echo 'Please fill the form and submit again';
    }else{

        if( (strlen($_POST['contact_name'])<50) && (strlen($_POST['contact_email'])<50) && (strlen($_POST['contact_text'])<1000)){

            $to = 'mycontactaddr@mysite.org';
            $subject = 'Contact form submitted';
            $message = $_POST['contact_text'];
            $headers = 'From: <'.$_POST['contact_name'].'>'.$_POST['contact_email'];

            if( mail($to,$subject,$message,$headers) ){
                echo 'email has been sent, thanks for contacting us';
            }else{
                echo 'error sending the email, try again later';
            }
        }else{
            echo 'Maxlength for a form field exceeded, try again';
        }

    }
}

?>

<form action="contact-form.php" method="POST">
    Name:<br><input type="text" name="contact_name" maxlength="49"/><br><br>
    Email address:<br><input type="text" name="contact_email" maxlength="49"/><br><br>
    Message:<br>
    <textarea name="contact_text" rows="5" cols="22" maxlength="999"></textarea>
    <br><input type="submit" />
</form>

