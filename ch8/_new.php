<?php

 // Differential equation
 function f($x, $y) {
    return ($x *$x) + $y;
}

// Initial condition
$x0 = @$_POST['x0'];
$y0 = @$_POST['Yx0'];

// Step size
$h = @$_POST['h'];

// Number of steps
$n = @$_POST['n'];

// Initialize variables
$x = $x0;
$y = $y0;

// Perform the integration
for ($i = 0; $i < $n; $i++) {
    $y += $h * f($x, $y); // $y = $y + $h*f($x,$y);
    $x += $h; //$x = $x + $h;
    
    // the line $x += $h is used to update the value of the independent variable $x at each step of the integration.
    //$h is the step size.
    //$x is the current value of the independent variable. 
    // The line $x += $h increments $x by $h and assigns the result back to $x, so that $x takes on the value of the next point in the integration interval. 
}


?>