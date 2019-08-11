<?php

header('Content-type: image/jpeg');

mysql_connect('localhost','root','');
mysql_select_db('a_database');

if( isset($_GET['id']) ){
    $id = $_GET['id'];
    $query = "SELECT email FROM users3 WHERE id='".mysql_real_escape_string($id)."'";
    $query_run = mysql_query($query);

    if(mysql_num_rows($query_run)>=1)
        $email = mysql_result($query_run,0,'email');
    else
        $email = 'ID not found';

}else{
    $email= 'No email specified';
}

    $email_legth = strlen($email);

    $font_size = 4;

    $image_height = imagefontheight($font_size);
    $image_width = imagefontwidth($font_size) * $email_legth;

    $image = imagecreate($image_width,$image_height);

    imagecolorallocate($image, 255, 255, 255);
    $font_color =  imagecolorallocate($image, 0, 0, 0);

    imagestring($image,$font_size,0,0,$email,$font_color);

    imagejpeg($image);

?>
