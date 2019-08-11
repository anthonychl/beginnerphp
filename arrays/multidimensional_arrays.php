<?php
//video 38 arrays

$food = array( 'Healthy'=>array('Pasta', 'Vegetable', 'Salad'),
                      'Unhealthy'=>array('Pizza','Burger','Ice cream'));

echo $food['Healthy'][0];
echo '<br>';
echo $food['Unhealthy'][2];
echo '<br>';
print_r($food);
echo '<br>';
echo '<br>';

$food_calories = array( 'Healthy'=>array('Pasta'=>300, 'Vegetable'=>50, 'Salad'=>150),
                                  'Unhealthy'=>array('Pizza'=>1000,'Burger'=>800,'Ice cream'=>200));

echo $food_calories['Healthy']['Pasta'];
echo '<br>';
echo $food_calories['Unhealthy']['Burger'];
echo '<br>';
print_r($food_calories);
echo '<br>';


?>