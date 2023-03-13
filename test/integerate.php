<?php

// Function to be integrated
function f($x) {
    return sin($x);
}

// Lower and upper bounds of integration
$a = 0;
$b = M_PI;

// Number of intervals
$n = 100;

// Step size
$h = ($b - $a) / $n;

// Initialize result
$result = 0;

// Perform the integration
for ($i = 0; $i < $n; $i++) {
    $result += f($a + $i * $h) + f($a + ($i + 1) * $h);
}
$result *= $h / 2;

echo "The result is: " . gmp_strval($result);

?>