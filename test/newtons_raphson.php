
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<title>Newtons Naphson</title>
</head>
<body style="background-color: #CFF4FC;">
<button style="background-color: #07FFFF ;border-radius: 30px;position:absolute ; margin-left:100px;margin-top:15px"><a style="color:black;text-decoration: none;" href="/numerical_project/home.php">Back Home</a></button>
<center><h1 style="font-family:'Courier New', Courier, monospace;margin-top:10px">newton Raphson</h1></center>
<hr class="border border-info border-2 opacity-50">
<div class="container mb-4">

<?php
// PHP program for implementation
// of Newton Raphson Method for
// solving equations
$EPSILON = 0.001;

// An example function whose
// solution is determined
// using Bisection Method.
// The function is x^3 - x^2 + 2
function func($x)
{
	return $x * $x * $x -
		500;
}

// Derivative of the above
// function which is 3*x^x - 2*x
function derivFunc($x)
{
	return 3 * $x *
			$x - 2 * $x;
}

// Function to
// find the root
function newtonRaphson($x)
{
	global $EPSILON;
	$h = func($x) / derivFunc($x);
	while (abs($h) >= $EPSILON)
	{
		$h = func($x) / derivFunc($x);

		// x(i+1) = x(i) -
		// f(x) / f'(x)
		$x = $x - $h;
	}

	echo "<h3 style = 'margin-left:200px;margin-top:150px'>The value of the root is :  <u>" . $x  ."</u></h3>";
}

// Driver Code
$x0 = -20; // Initial values assumed
newtonRaphson($x0);

// This code is contributed by ajit

?>

</div>


</body>
</html>