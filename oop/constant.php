<?php

class Circle {
    const pi = 3.141;

    public function Area($radius){
       //return Circle::pi * ($radius*$radius);
       return self::pi * ($radius*$radius);
    }
}

//echo Circle::pi;

$circle = new Circle();
echo $circle->Area(10);




?>