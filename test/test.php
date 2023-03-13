<?php

$x = 0;
$y = 0;

do {
    $x= (-5 + random_int(0,20));
    $y= (-5 + random_int(0,20));
} while (f($x) * f($y) >= 0 or abs($x - $y ) != 1);
echo "/*Bisection_Method/*";
echo ("interval (" . $x . "," .$y . ")");

if($y > $x){
$swap = $x;
$x = $y;
$y = $swap;
}

$c = f($x) * f($y);

if($c >=0){

}


function f($z){
    $a= ( $z*$z*$z )+ 5 * ($z*$z)-100;
    return $a;
}

