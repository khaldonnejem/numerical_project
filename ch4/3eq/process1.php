<?php
include("_new.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>least squares</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>


    </style>
</head>
<body style="background-color: #CFF4FC;">
<button class="btn btn-info" style="background-color: #07FFFF ;border-radius: 30px;position:absolute ; margin:15px 150px 0 50px"><a style="color:black;text-decoration: none;" href="/numerical_project/home.php">Back Home</a></button>
<center><h1 style="font-family:'Courier New', Courier, monospace;" >Least squares 3eq</h1></center>
<hr class="border border-info border-2 opacity-50">

<div class=" container mx-auto">

<table style="text-align: center;" class="table table-bordered">
   <thead class="thead-dark">
   <tr>
        <th>#</th>
        <th>X</th>
        <th>Y</th>
        <th>XY</th>
        <th>X<sup>2</sup></th>
        <th>X<sup>3</sup></th>
        <th>X<sup>4</sup></th>
        <th>X<sup>2</sup>Y</th>
    </tr>
   </thead>
   <tbody>
   <tr>
        <td class="bg-info"></td>
        <td><?php echo $x0?></td>
        <td><?php echo $y0?></td>
        <td><?php echo $xy0?></td>
        <td><?php echo $xn0?></td>
        <td><?php echo $xnn0?></td>
        <td><?php echo $xm0 ?></td>
        <td><?php echo $xny0 ?></td>
    </tr>
    <tr>
        <td class="bg-info"></td>
        <td><?php echo $x1?></td>
        <td><?php echo $y1?></td>
        <td><?php echo $xy1?></td>
        <td><?php echo $xn1?></td>
        <td><?php echo $xnn1?></td>
        <td><?php echo $xm1 ?></td>
        <td><?php echo $xny1 ?></td>
    </tr>
    <tr>
        <td class="bg-info"></td>       
        <td><?php echo $x2?></td>
        <td><?php echo $y2?></td>
        <td><?php echo $xy2?></td>
        <td><?php echo $xn2?></td>
        <td><?php echo $xnn2?></td>
        <td><?php echo $xm2 ?></td>
        <td><?php echo $xny2 ?></td>
    </tr>
    <tr>
        <td class="bg-info"></td>
        <td><?php echo $x3?></td>
        <td><?php echo $y3?></td>
        <td><?php echo $xy3?></td>
        <td><?php echo $xn3?></td>
        <td><?php echo $xnn3?></td>
        <td><?php echo $xm3 ?></td>
        <td><?php echo $xny3 ?></td>
    </tr>

   </tbody>

   <tfoot class="bg-info text-white">
        <td class="bg-danger">&sum;</td>
        <td><?php echo $rx?></td>
        <td><?php echo $ry?></td>
        <td><?php echo $xyn?></td>
        <td><?php echo $xn?></td>
        <td><?php echo $xnn?></td>
        <td><?php echo $xm ?></td>
        <td><?php echo $xny ?></td>
   </tfoot>

</table>
</div>
<div class="container mb-5">

    <?php


     if($x3 > $x2 && $x2 > $x1 && $x1 > $x0){
        echo "<h5 style='color: maroon'> &bull; value of Y&#96; =   <b style='color: black'> $yy</b> </h2>";
      
        echo "<h5 style='color: maroon'> &bull; value of X&#96 =   <b style='color: black'> $xx</b> </h2>";

        echo "<h5 style='color: maroon'> &bull; equation 1 is : <b style='color: black'> $n a0 + $rx a1 +  $xn a2  =$ry </b> </h2>";
        echo "<h5 style='color: maroon'> &bull; equation 2 is :  <b style='color: black'>  $rx a0 +$xn a1 + $xnn a2 =$xyn </b> </h5>";
        echo "<h5 style='color: maroon'> &bull; equation 3 is :  <b style='color: black'>  $xn a0 +$xnn a1 + $xm a2 =$xny </b> </h5>";

        echo "<h5 style='color: maroon'> &bull; value of a0 =   <b style='color: black'> $a0</b> </h5>";
        echo "<h5 style='color: maroon'> &bull; value of a1 =   <b style='color: black'> $a1</b> </h5>";
        echo "<h5 style='color: maroon'> &bull; value of a2 =   <b style='color: black'> $a2</b> </h5>";
        echo "<h5 style='color: maroon'> &bull; value of cc =   <b style='color: black'> $cc</b> </h5>";
        echo "<h3 style='color: maroon'> &bull; value of Y =   <b class = 'bg-dark' style='color: black'> $a0 + $a1 X + $a2 X²</b> </h3>";


     }


    ?>
</div>
<div class="container mx-auto mb-5">
<button  class="btn btn-danger "><a class="text-white" href="least_squares.php">Go Back</a></button>

</div>

</body>
</html>

