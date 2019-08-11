<?php
	//operadores logicos video 23
	
	$number = 1200;
	
	$upper = 1000;
	$lower = 500;
	
	if($number<=$upper AND $number >= $lower)
		echo 'within bounds<br>';
	else
		echo 'out of bounds<br>';
	
	if($number<=$upper && $number >= $lower)
		echo 'within bounds<br>';
	else
		echo 'out of bounds<br>';
	
	if($number<=$upper OR $number >= $lower)
		echo 'within one bound<br>';
	else
		echo 'out of bounds<br>';	
	
?>