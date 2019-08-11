<?php
//video 41 for each

$food = array( 'Healthy'=>array('Pasta', 'Vegetable', 'Salad'),
                      'Unhealthy'=>array('Pizza','Burger','Ice cream'));


foreach ($food as $element => $inner_array ){
	echo '<strong>'.$element.'</strong><br>';
	foreach ($inner_array as $item)
	echo '<i>'.$item.'</i><br>';
	
}
	


?>