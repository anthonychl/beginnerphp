<?php
	echo 'addslashes <br>';
	$string = 'this <image src="image.jpg"> is a cat';
	echo $string.'<br>';
	echo htmlentities($string).'<br>';
	echo htmlentities(addslashes($string)).'<br>';
	
	echo '<br>';
	echo '<br>';
	
	echo 'stripslashes <br>';
	$string2 = htmlentities(addslashes($string));
	echo $string2.'<br>';
	echo stripslashes($string2).'<br>';
	

?>