<?php

$filename = 'names2.txt';
$handle = fopen($filename,'r');

//echo fread($handle,10); // 10: amount of characters we want to read from the file
//echo fread($handle,filesize($filename)); // filesize($filename) if we want to read the whole file

$data_in = fread($handle, filesize($filename));

$names_array = explode(',' , $data_in); //array type ... split a string by string

print_r($names_array);

echo '<br><br>';
echo $names_array[0].'<br><br>';

foreach($names_array as $n){
    echo $n.'<br>';
}

?>