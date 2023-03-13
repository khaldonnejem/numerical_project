
<?php
// define the function to be integrated
function f($x) {
    return ( 1 / (1 + ( $x *$x)));
}

// define the limits of the integration interval
$a = 0;
$b = 2;

// define the number of intervals
$n = 10;

// calculate the interval size
$h = ($b - $a) / $n;

// initialize the sum
$sum = 0;

// loop over the intervals and calculate the area of each trapezoid
for ($i = 1; $i < $n; $i++) {
    $x1 = $a + $h * ($i - 1);
    $x2 = $a + $h * $i;
    $sum += ($x2 - $x1) * (f($x1) + f($x2)) / 2;
}

// add the area of the left and right triangles
$sum += ($h / 2) * (f($a) + f($b));

// print the result
echo "The integral is approximately: $sum\n";
?>