<?php

header('Content-type: image/jpeg');

if(isset($_GET['source'])){
    $source = $_GET['source'];

    $watermark = imagecreatefrompng('03.png');
    $watermark_width = imagesx($watermark);
    $watermark_height = imagesy($watermark);

    $image = imagecreatetruecolor($watermark_width,$watermark_height);
    $image = imagecreatefromjpeg($source);

    //this returns an array with the values of width and height
    $image_size = getimagesize($source);

    //this are the x:y coordinates for the watermark at the lower right corner
    // minus watermark dimensions and a 10 pixels spacing
    $x = $image_size[0]- $watermark_width - 10;
    $y = $image_size[1]- $watermark_height - 10;

    //merge of to images
    //the last parameter is transparency
    imagecopymerge($image, $watermark, $x, $y, 0,0,$watermark_width,$watermark_height,75);

    imagejpeg($image);

}

?>