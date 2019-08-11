<?php
    $string='this part bypass, this part search';
    $string_new= substr_replace($string, 'that is the',18,4);
    echo $string_new.'<br>';
    $string_new2= substr_replace($string, 'that is the',18,7);
    echo $string_new2.'<br>';
    $string_new3= substr_replace($string, 'that is the',18,9);
    echo $string_new3.'<br>';



?>