<?php

// PhP program for simpson's 1/3 rule

// Function to calculate f(x)
function func($x)
{
	return (1/(($x *$x)+1));
}

// Function for approximate integral
function simpsons_($ll, $ul, $n)
{
	
	// Calculating the value of h
	$h = ($ul - $ll) / $n;
	// echo $h;
	// Calculating values of x and f(x)
	for ($i = 0; $i <= $n; $i++)
	{
		$x[$i] = $ll + $i * $h;
		$fx[$i] = func($x[$i]);
	}

	// Calculating result
	$res = 0;
	for ($i = 0; $i <= $n; $i++)
	{
		if ($i == 0 || $i == $n)
			$res += $fx[$i];
		else if ($i % 2 != 0)
			$res += 4 * $fx[$i];
		else
			$res += 2 * $fx[$i];
	}
	
	$res = $res * ($h / 3);
	
	return $res;
}

// Driver program
	$lower_limit = 0; // Lower limit
	$upper_limit = 1; // Upper limit
	$n = 8; // Number of interval
	echo "<p>y =". simpsons_($lower_limit, $upper_limit, $n) . "</p>";

// This code is contributed by ajit.
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<marquee>simpson</marquee>
</body>
</html>