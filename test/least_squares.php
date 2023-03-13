<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Least squares</title>
</head>
<?php

include("_new.php");
?>
<button style="background-color: #07FFFF ;border-radius: 30px;position:absolute ; margin:15px 150px 0 50px"><a style="color:black;text-decoration: none;" href="/numerical_project/home.php">Back Home</a></button>

<body style="background-color: #CFF4FC;">
<center><h1 style="font-family:'Courier New', Courier, monospace;" >Least squares</h1></center>
<hr class="border border-info border-2 opacity-50">


<form action="process.php" method="post" id="form" align="center" >
    <b> X0 : </b><input type="text" name="x0" id="x0" required value="<?php echo @$_POST['x0']?>" >
    <b> Y0 : </b><input type="text" name="y0" id="y0" required value="<?php echo @$_POST['y0']?>" ><br><br>
    <!--    <b> [x0,x1] : </b><input type="text" name="y0" id="y0"  value="--><?php //echo $d0 ?><!--" ><br><br>-->
    <b> X1 : </b><input type="text" name="x1" id="x1" required value="<?php echo @$_POST['x1']?>" >
    <b> Y1 : </b><input type="text" name="y1" id="y1" required value="<?php echo @$_POST['y1']?>" ><br><br>
    <b> X2 : </b><input type="text" name="x2" id="x2" required value="<?php echo @$_POST['x2']?>" >
    <b> Y2 : </b><input type="text" name="y2" id="y2" required  value="<?php echo @$_POST['y2']?>" ><br><br>
    <b> X3 : </b><input type="text" name="x3" id="x3" required value="<?php echo @$_POST['x3']?>" >
    <b> Y3 : </b><input type="text" name="y3" id="y3" required value="<?php echo @$_POST['y3']?>" ><br><br>
<!--    <b> Enter X :</b><input type="text" name="x" id="x" required value="--><?php //echo @$_POST['x']?><!--" ><br><br>-->
    <!--    <b> X4 : </b><input type="text" name="x4" id="x4" value="" >-->
    <!--    <b> Y4 : </b><input type="text" name="y4" id="y4" value="" ><br><br>-->

    <input type="submit" name="submit" value="Reuslt" >
    <!--    <input type="reset" ondrop="delete "  value="Reset All">-->

</form>
<div>
    <?php
       if($x3 > $x2 && $x2 > $x1 && $x1 > $x0){
//        echo "<b style='font-size: 20px ;color: darkblue'> [x0,x1] Is : </b> </center>" . "<b style='font-size: 18px'>$d0</b>" ."<br>" . "<b style='font-size: 20px ;color: darkblue'> [x1,x2] Is : </b>" . " <b style='font-size: 18px'>$d1</b>" ."<br>" ."<b style='font-size: 20px ;color: darkblue'> [x2,x3] Is : </b>" . "<b style='font-size: 18px'>$d2</b>" ."<br>" ;
//        echo "<b style='font-size: 20px ;color: darkblue'>[x0,x1,x2] Is : </b>" . "<b style='font-size: 18px'>$d3</b>"."<br>" . "<b style='font-size: 20px ;color: darkblue'>[x1,x2,x3] Is : </b>" . "<b style='font-size: 18px'>$d4</b>" ."<br>" ;
//        echo "<b style='font-size: 20px ;color: darkblue'>[x0,x1,x2,x3] Is : </b>" . "<b style='font-size: 18px'>$r</b>" ;

        echo "<center><p style='color: maroon'> The value of Y' =   <b style='color: black'> $yy</b> </h2></center>";
        echo "<center><p style='color: maroon'> The value of X' =   <b style='color: black'> $xx</b> </h2></center>";

        echo "<center><h5 style='color: maroon'> The equation is : <b style='color: black'> $n a0 + $rx a1 =$ry </b> </h2></center>";
        echo "<center><h5 style='color: maroon'> The equation 2 is :  <b style='color: black'>  $rx a0 +$xn a1 =$xyn </b> </h5></center>";
        echo "<center><h5 style='color: maroon'> The value of a0 =   <b style='color: black'> $a0</b> </h5></center>";
        echo "<center><h5 style='color: maroon'> The value of a1 =   <b style='color: black'> $a1</b> </h5></center>";
        echo "<center><h5 style='color: maroon'> The value of cc =   <b style='color: black'> $cc</b> </h5></center>";

        echo "<center><h3 style='color: maroon'> The value of Y =   <b style='color: black'> $a0 + $a1 X</b> </h3></center>";



//        echo "<center><h1 style='color: maroon'> y($x) = <b style='color: black'> $ans </b></h1></center>";

    }else{
        // echo "<center><h1 style='color: red'>error</h1>";

    }
    ?>

</body>
</html>






<?php
//// define the data points
//$data = array(
//    array(0, 5),
//    array(1, 1),
//    array(6, -19),
//    array(8, -27)
//);

// define the error function
//function error($data, $m, $b) {
//    $error = 0;
//    foreach ($data as $point) {
//        $x = $point[0];
//        $y = $point[1];
//        $error += pow($y - ($m * $x + $b), 2);
//    }
//    return $error;
//}
//
//// define the gradient descent function
//function gradient_descent($data, $m, $b, $learning_rate) {
//    $derivative_m = 0;
//    $derivative_b = 0;
//    $N = count($data);
//    foreach ($data as $point) {
//        $x = $point[0];
//        $y = $point[1];
//        $derivative_m += -2 * $x * ($y - ($m * $x + $b));
//        $derivative_b += -2 * ($y - ($m * $x + $b));
//    }
//    $m -= ($derivative_m / $N) * $learning_rate;
//    $b -= ($derivative_b / $N) * $learning_rate;
//    return array($m, $b);
//}
//
//// set the initial values for m and b
//$m = 0;
//$b = 0;
//
//// set the learning rate
//$learning_rate = 0.01;
//
//// set the number of iterations
//$num_iterations = 1000;
//
//// run the gradient descent algorithm
//for ($i = 0; $i < $num_iterations; $i++) {
//    list($m, $b) = gradient_descent($data, $m, $b, $learning_rate);
//}
//
//// print the final values for m and b
//echo "m = $m\n";
//echo "b = $b\n";
//

?>
