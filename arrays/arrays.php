<?php
//video 38 arrays

$food = array('Pasta', 'Pizza', 'Salad');
echo $food[0];
echo '<br>';
echo $food[2];
echo '<br>';

print_r($food);
echo '<br>';

$food[3] = 'Vegetable';
$food[4] = 'Fruit';
print_r($food);
echo '<br>';

for($i = 0;$i < 5; $i++)
	echo "$food[$i] <br>";
?>