<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title> NUMERICAL </title>
  
</head>
<button class="btn btn-info" style="background-color: #07FFFF ;border-radius: 30px;position:absolute ; margin:15px 150px 0 50px"><a style="color:black;text-decoration: none;" href="/numerical_project/home.php">Back Home</a></button>
<?php
include("_new.php");
?>

<body  style="background-color: #CFF4FC;">
    <center>
        <h1 style="font-family:'Courier New', Courier, monospace;">Numerical differentiation</h1>
    </center>
    <hr class="border border-info border-2 opacity-50">

    <div class="container mb-4 ">
        <form action="process1.php" method="post" id="form" align="center">

            <table class="table table-striped  table-info">

            <thead class="thead-dark">
            <tr>
                <th>X</th>
                <th>Y</th>
            </tr>
            </thead>
                <tbody>
                    <tr>
                        <td>
                            <span> X0 : </span><input type="text" name="x0" id="x0" required value="<?php echo @$_POST['x0'] ?>">
                        </td>
                        <td>
                            <span> Y0 : </span><input type="text" name="y0" id="y0" required value="<?php echo @$_POST['y0'] ?>">
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <span> X1 : </span><input type="text" name="x1" id="x1" required value="<?php echo @$_POST['x1'] ?>">
                        </td>
                        <td>
                            <span> Y1 : </span><input type="text" name="y1" id="y1" required value="<?php echo @$_POST['y1'] ?>">
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <span> X2 : </span><input type="text" name="x2" id="x2" required value="<?php echo @$_POST['x2'] ?>">
                        </td>
                        <td>
                            <span> Y2 : </span><input type="text" name="y2" id="y2" required value="<?php echo @$_POST['y2'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span> X3 : </span><input type="text" name="x3" id="x3" required value="<?php echo @$_POST['x3'] ?>">
                        </td>
                        <td>
                            <span> Y3 : </span><input type="text" name="y3" id="y3" required value="<?php echo @$_POST['y3'] ?>">
                        </td>
                  
                </tbody>
            </table>

            <span> Enter X : </span><input style="width: 25%; type="text" name="x" id="x" required value="<?php echo @$_POST['x'] ?>">
            <?php $bigSpace = str_repeat("&nbsp;", 20);
            echo $bigSpace;
            ?>
            <input class="btn btn-info" type="submit" name="submit" value="Reuslt">
        </form>
    </div>
    <div>
        <?php
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