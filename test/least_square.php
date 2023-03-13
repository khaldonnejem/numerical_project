
<?php
// define the data points
$data = array(
    array(0, 5),
    array(1, 1),
    array(6, -19),
    array(8, -27)
);

// define the error function
function error($data, $m, $b) {
    $error = 0;
    foreach ($data as $point) {
        $x = $point[0];
        $y = $point[1];
        $error += pow($y - ($m * $x + $b), 2);
    }
    return $error;
}

// define the gradient descent function
function gradient_descent($data, $m, $b, $learning_rate) {
    $derivative_m = 0;
    $derivative_b = 0;
    $N = count($data);
    foreach ($data as $point) {
        $x = $point[0];
        $y = $point[1];
        $derivative_m += -2 * $x * ($y - ($m * $x + $b));
        $derivative_b += -2 * ($y - ($m * $x + $b));
    }
    $m -= ($derivative_m / $N) * $learning_rate;
    $b -= ($derivative_b / $N) * $learning_rate;
    return array($m, $b);
}

// set the initial values for m and b
$m = 0;
$b = 0;

// set the learning rate
$learning_rate = 0.01;

// set the number of iterations
$num_iterations = 1000;

// run the gradient descent algorithm
for ($i = 0; $i < $num_iterations; $i++) {
    list($m, $b) = gradient_descent($data, $m, $b, $learning_rate);
}

// print the final values for m and b
// echo "m = $m\n";
echo "m =". round($m ,2)."\n";
// echo "m =". number_format($m ,2,'.','')."\n";
echo "b = $b\n";


?>