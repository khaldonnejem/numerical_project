<?php
// Differential equation
function f($x, $y) {
    return -$y;
}

// Initial condition
$x0 = 0;
$y0 = 1;

// Step size
$h = 0.01;

// Number of steps
$n = 4;

// Initialize variables
$x = $x0;
$y = $y0;

// Perform the integration
for ($i = 0; $i < $n; $i++) {
    $y += $h * f($x, $y); // $y = $y + $h*f($x,$y);
    $x += $h; //$x = $x + $h;
    
}
echo "<b>The result is: y = <u> " . $y ."</u></b>";
?>