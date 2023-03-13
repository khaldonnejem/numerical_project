<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Least squares</title>
</head>
<?php
//include("_new.php");
//?>
<button class="btn btn-info" style="background-color: #07FFFF ;border-radius: 30px;position:absolute ; margin:15px 150px 0 50px"><a style="color:black;text-decoration: none;" href="/numerical_project/home.php">Back Home</a></button>
<style>
   /*tr {*/
   /* */
   /* }*/
</style>
<body style="background-color: #CFF4FC;">
<center><h1 style="font-family:'Courier New', Courier, monospace;" >Least squares 2 eq</h1></center>
<hr class="border border-info border-2 opacity-50">

<div class="container mb-4 ">
<form action="process1.php" method="post" id="form" align="center" >

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
        <b> X0 : </b><input type="text" name="x0" id="x0" required value="<?php echo @$_POST['x0']?>" >
        </td>
        <td>
        <b> Y0 : </b><input type="text" name="y0" id="y0" required value="<?php echo @$_POST['y0']?>" >
        </td>
        
    </tr>
    <tr>
        <td>
        <b> X1 : </b><input type="text" name="x1" id="x1" required value="<?php echo @$_POST['x1']?>" >
        </td>
        <td>
        <b> Y1 : </b><input type="text" name="y1" id="y1" required value="<?php echo @$_POST['y1']?>" >
        </td>
      
    </tr>
    <tr>
        <td>
        <b> X2 : </b><input type="text" name="x2" id="x2" required value="<?php echo @$_POST['x2']?>" >
        </td>
        <td>
        <b> Y2 : </b><input type="text" name="y2" id="y2" required  value="<?php echo @$_POST['y2']?>" >
        </td> 
    </tr>
    <tr>
        <td> 
        <b> X3 : </b><input type="text" name="x3" id="x3" required value="<?php echo @$_POST['x3']?>" >
        </td>
        <td>
        <b> Y3 : </b><input type="text" name="y3" id="y3" required value="<?php echo @$_POST['y3']?>" >
        </td>                                                                                                        
    </tr> 
    </tbody>
    </table>
    
    <input class="btn btn-info" type="submit" name="submit" value="Reuslt" >

</form>
</div>
<div>
    <?php
    $x = @$_POST['x'];
    $x0 = @$_POST['x0'];
    $y0 = @$_POST['y0'];
    //$d00 = @$_POST['d00'];
    $x1 = @$_POST['x1'];
    $y1 = @$_POST['y1'];
    $x2 = @$_POST['x2'];
    $y2 = @$_POST['y2'];
    $x3 = @$_POST['x3'];
    $y3 = @$_POST['y3'];
    $n = 4;
    $rx = $x0+$x1+$x2 +$x3;
    $ry = $y0+$y1+$y2+$y3;
    $yy= $ry/$n;
    $xx= $rx/$n;
    $xn0 = $x0 * $x0;
    $xn1 = $x1 * $x1;
    $xn2 = $x2 * $x2;
    $xn3 = $x3 * $x3;
    $xn = $xn0+$xn1+$xn2+$xn3;
    $yn0 = $y0 * $y0;
    $yn1 = $y1 * $y1;
    $yn2 = $y2 * $y2;
    $yn3 = $y3 * $y3;
    $yn = $yn0+$yn1+$yn2+$yn3;
    $xy0 = $x0 * $y0 ;
    $xy1 = $x1 * $y1;
    $xy2 = $x2 * $y2 ;
    $xy3 = $x3 * $y3 ;
    $xyn = $xy0 + $xy1+$xy2+$xy3 ;
    $a1 = ($xn - ($n*$xx*$xx)) ? ($xyn - ($n * $yy * $xx))   / ($xn - ($n*$xx*$xx)) : 0 ;
    $a0 = $yy - $a1*$xx ;
    $cc= (sqrt(($yn - ($n*$yy*$yy) )) * sqrt(($xn - ($n*$xx*$xx) ))) ?  ($xyn - ($n * $yy * $xx) )  / (sqrt(($yn - ($n*$yy*$yy) )) *sqrt(($xn - ($n*$xx*$xx) ))) : 0 ;

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

    }
    //else{
//        echo "<center><h1 style='color: red'>error</h1>";
//
//    }
    ?>

</body>
</html>






