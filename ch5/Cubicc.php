<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title style="color: red">Cubic Spline</title>
    <style>
        tr td{
            display: inline-block;
            /* position: absolute; */
        }
    </style>
</head>
<body style="background-color: #CFF4FC">
<button class="btn btn-info" style="background-color: #07FFFF ;border-radius: 30px;position:absolute ; margin:15px 150px 0 50px"><a style="color:black;text-decoration: none;" href="/numerical_project/home.php">Back Home</a></button>
    <h1> <center> Cubic Spline </center></h1>
    <hr class="border border-info border-2 opacity-50">

    <div id="" align="center">
            <form action="" method="post" id="form" align="center">

            <table class="table">
                <tr>
                    <td><span> X0 : </span><input type="text" name="x0" id="x1" value="<?php echo @$_POST['x0'];?>" required></td>
                    <td><span> Y0 : </span><input type="text" name="y0" id="y1" value="<?php echo @$_POST['y0'];?>" required></td>
                </tr>
                <tr>
                    <td><span> X1 : </span><input type="text" name="x1" id="x2" value="<?php echo @$_POST['x1'];?>" required></td>
                    <td><span> Y1 : </span><input type="text" name="y1" id="y2" value="<?php echo @$_POST['y1'];?>" required></td>
                </tr>
                <tr>
                    <td><span> X2 : </span><input type="text" name="x2" id="x3" value="<?php echo @$_POST['x2'];?>" required></td>
                    <td><span> Y2 : </span><input type="text" name="y2" id="y3" value="<?php echo @$_POST['y2'];?>" required></td>
                </tr>
                <tr>
                    <td><span> Enter X :</sp><input type="text" name="x" id="x" value="<?php echo @$_POST['x'];?>" required></td>
                    <td><input class="btn btn-info" type="submit" name="submit" value="Find equation" >
                    </td>
                </tr>
            </table>    
            </form>
    </div>
</body>
</html>
<?php
    function c_spline($h,$xi,$xi1,$mi1,$mi,$yi1,$yi,$x){
        $x0 = $xi;
        $a = pow(($x0-$x),3)*($mi1/6);
        $b = pow(($x-$xi1),3)*($mi/6);
        $c1 = $yi1 - ((($h*$h)/6)*$mi1);
        $c2 = $c1 * ($x0-$x);
        $d1 = $yi - ((($h*$h)/6)*$mi);
        $d2 = $d1 *($x-$xi1);
        $ans = ($a+$b+$c2+$d2)/$h;
        $z1 = $mi1/6;
        $z2 = $mi/6;
////////////////////////////////////////////
        $x = @$_POST["x"];
        $x0 = @$_POST["x0"];
        $x1 = @$_POST["x1"];
        $x2 = @$_POST["x2"];
        $y0 = @$_POST["y0"];
        $y1 = @$_POST["y1"];
        $y2 = @$_POST["y2"];
        $h = $x2-$x1;
        $m = (6/($h*$h))*($y2-(2*$y1)+$y0);
        $m1 = $m/4;
        $m0 = 0;
        $m2=0;
////////////////////////////////////////////
        echo "<center><h4 style='color: maroon'> The equation :S(x)= <b style='color: black'>1/$h(((($x0-x)^3)*$z1) + (((x-$x0)^3)*$z2)+( $c1 * ($x0-x)) +($d1 *(x-$xi1)))</b> </h4></center>";
        echo "<hr>";
        echo "<center><h3 style='color: maroon'> y($x) = <b style='color: black'> $ans </b></h3></center>";
        echo "<hr>";
        echo "<center><h3 style='color: maroon'> m1 = <b style='color: black'> $m1 </b></h3></center>";
    }

    $x = @$_POST["x"];
    $x0 = @$_POST["x0"];
    $x1 = @$_POST["x1"];
    $x2 = @$_POST["x2"];
    $y0 = @$_POST["y0"];
    $y1 = @$_POST["y1"];
    $y2 = @$_POST["y2"];
    $h = $x2-$x1;

    $m = (6/($h*$h))*($y2-(2*$y1)+$y0);
    $m1 = $m/4;
    $m0 = 0;
    $m2=0;
   
// }
    if($x <= $x1 && $x >= $x0 ) {
        $eq = c_spline($h,$x1,$x0,$m0,$m1,$y0,$y1,$x);}

    else if ($x  <= $x2 && $x >= $x1){
        $eq = c_spline($h,$x2,$x1,$m1,$m2,$y1,$y2,$x);}
    else {
        echo " <br><h3 style='text-align: center ; color: red'> OUT OF RANGE<h3> ";
    }
    echo  $eq ;
   

?>



