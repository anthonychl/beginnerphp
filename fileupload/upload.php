<?php

 @ $name = $_FILES['file']['name'];
 @ $size = $_FILES['file']['size'];  //in bytes
 @ $type = $_FILES['file']['type'];

//temporary name/location when loading from any directory
 @ $tmp_name = $_FILES['file']['tmp_name'];

 $max_size = 2097152; // 2 megabytes


if( isset($name)  ){
    if(!empty($name)){

        echo $name.' -- type: '.$type.' -- size: '.$size.'<br>';
        echo 'temporary location :'.$tmp_name.'<br><br>';

        /*
         //$extension = substr($name,strpos($name,'.')+1) ;
         this is how it was coded on the video
         but if the file name has a dot in the middle
         i.e. my.pic342.jpg it would save pic342.jpg as
         the extension
        */

        $length = strlen($name);
        $extension = strtolower(substr($name,$length-3));

        if ( ($extension == 'jpg' || $extension == 'jpeg') && ($type == 'image/jpeg' || $type == 'image/jpg') && ($size<$max_size) ){

            $location = 'uploads/';
            //move_uploaded_file($temp_location,$destination.'thenameofthefile.extension');
            if (move_uploaded_file($tmp_name,$location.$name))
                echo 'File Uploaded';
            else
                echo 'Error uploading';
        }else{
            echo 'upload a jpg/jpeg file smaller than 2 Mb';
        }


    }else{
        echo 'please choose a file';
    }
}


?>

<form action="upload.php" method="POST" enctype="multipart/form-data">
<!--enctype : the way the data in the form is encoded when sent-->
    <input type="file" name="file" /><br><br>
    <input type="submit" value="SUBMIT">

</form>