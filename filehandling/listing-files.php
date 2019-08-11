<?php


$directory = 'files';

if ($handle = opendir($directory.'/')){
    echo "Looking inside directory: '$directory' <br>";

    while($file = readdir($handle)){

        if($file != '.' && $file != '..'){
            //echo $file.'<br>';
            //echo '<a href="'.$directory.'/'.$file.'">'.$file.'</a><br>';
            echo "<a href='$directory/$file'>$file</a><br> ";
        }

    }
}


?>