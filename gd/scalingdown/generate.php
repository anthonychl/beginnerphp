<?php
header('Content-type: image/jpeg');

if( isset($_GET['image']) ){
    $image = $_GET['image'];

    $image_size = getimagesize($image);
    $img_width = $image_size[0];
    $img_height = $image_size[1];

    $thumb_size = ($img_width + $img_height)/($img_width * ($img_height/45));
    $thumb_width = $img_width * $thumb_size;
    $thumb_height = $img_height * $thumb_size;
    $thumb_img = imagecreatetruecolor($thumb_width,$thumb_height);

    $original_img = imagecreatefromjpeg($image);

    imagecopyresized($thumb_img,$original_img,0,0,0,0,$thumb_width,$thumb_height,$img_width,$img_height);
    imagejpeg($thumb_img);
    imagejpeg($thumb_img, $image.'-thumb.jpeg');
}


?>