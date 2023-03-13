<?php
include("_new.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUMERICAL DIFFERENTIATION</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>


    </style>
</head>

<body  style="background-color: #CFF4FC;">
    <center>
        <h1>NUMERICAL DIFFERENTIATION</h1>
    </center>
    <hr class="border border-info border-2 opacity-50">

    <div class=" container mx-auto">

        <table style="text-align: center;" class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <!-- <th>#</th>  -->
                    <th>X</th>
                    <th>Y</th>
                    <th>△</th>
                    <th>△<sup>2</sup></th>
                    <th>△<sup>3</sup></th>
                    <!-- <th>X<sup>4</sup></th>
        <th>X<sup>2</sup>Y</th>
       <th>Y<sup>2</sup></th> -->

                </tr>
            </thead>
            <tbody>
                <tr class="bg-secondary">
                    <!-- <td class="bg-info"></td> -->
                    <td><?php echo $x0 ?></td>
                    <td><?php echo $y0 ?></td>
                    <td></td>
                    <td></td>
                    <td></td>



                </tr>
                <tr class="bg-secondary">
                    <td></td>
                    <td></td>
                    <td class="bg-dark text-white"><?php echo $Δy0 ?></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="bg-secondary">
                    <!-- <td></td> -->
                    <td><?php echo $x1 ?></td>
                    <td><?php echo $y1 ?></td>
                    <td></td>
                    <td class="bg-dark text-white"><?php echo $Δny0 ?></td>
                    <td></td>


                </tr>
                <tr class="bg-secondary">
                    <td></td>
                    <td></td>
                    <td class="bg-dark text-white"><?php echo $Δy1 ?></td>
                    <td></td>
                    <td class="bg-dark text-white"><?php echo $Δmy0 ?></td>
                </tr>
                <tr class="bg-secondary">
                    <!-- <td></td>        -->
                    <td><?php echo $x2 ?></td>
                    <td><?php echo $y2 ?></td>
                    <td></td>
                    <td class="bg-dark text-white"><?php echo $Δny1 ?></td>
                    <td></td>


                </tr>
                <tr class="bg-secondary">
                    <td></td>
                    <td></td>
                    <td class="bg-dark text-white"><?php echo $Δy2 ?></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="bg-secondary">
                    <!-- <td></td> -->
                    <td><?php echo $x3 ?></td>
                    <td><?php echo $y3 ?></td>
                    <td></td>
                    <td></td>
                    <td></td>



                </tr>

            </tbody>



        </table>
    </div>
    <div class="container mb-5">

        <?php


        if ($x3 > $x2 && $x2 > $x1 && $x1 > $x0) {
          
                 if ($x == $x1) {
                echo "<h5 style='color: maroon'> &bull; equation Y' is : <b style='color: black'> (1/h)*(△y0-△²y0/2 + △³y0/3 +△^4y0/4 ) </b> </h2>";
                echo "<h5 style='color: maroon'> &bull; equation Y'' is :  <b style='color: black'> (1/h²)*(△²y0 - △³y0 + 11/12 △^4y0 ) </b> </h5>";
                echo "<h4 style='color: maroon'> &bull; The value Y' =  <b style='color: black'> (1/$h)*($Δy1-$Δny1/2 + $Δmy1) = $r1 </b> </h4>";
                echo "<h4 style='color: maroon'> &bull; The value  Y'' = <b style='color: black'> (1/$h1)*($Δny1 - $Δmy0 ) = $r2 </b> </h4>";
            } elseif ($x == $x0) {
                echo "<h5 style='color: maroon'> &bull; equation Y' is : <b style='color: black'> (1/h)*(△y0-△²y0/2 + △³y0/3 +△^4y0/4 ) </b> </h2>";
                echo "<h5 style='color: maroon'> &bull; equation Y'' is :  <b style='color: black'> (1/h²)*(△²y0 - △³y0 + 11/12 △^4y0 ) </b> </h5>";
                echo "<h4 style='color: maroon'> &bull; The value Y' =  <b style='color: black'> (1/$h)*($Δy0-$Δny0/2 + $Δmy0) = $r3 </b> </h4>";
                echo "<h4 style='color: maroon'> &bull; The value  Y'' =  <b style='color: black'> (1/$h1)*($Δny0  ) = $r2 </b> </h4>";
            } elseif ($x == $x2) {
                echo "<h5 style='color: maroon'> &bull; equation Y' is : <b style='color: black'> (1/h)*(△y0-△²y0/2 + △³y0/3 +△^4y0/4 ) </b> </h2>";
                echo "<h5 style='color: maroon'> &bull; equation Y'' is :  <b style='color: black'> (1/h²)*(△²y0 - △³y0 + 11/12 △^4y0 ) </b> </h5>";
                echo "<h4 style='color: maroon'> &bull; The value Y' =<b style='color: black'> (1/$h)*($Δy2) = $r5 </b> </h4>";
                echo "<h4 style='color: maroon'> &bull; The value  Y'' =  <b style='color: black'> (1/$h1)*( 0  ) = $r6 </b> </h4>";
            }   
            elseif ($x == $x3) {
                echo "<h5 style='color: maroon'> &bull; equation Y' is : <b style='color: black'> (1/h)*(0) </b> </h2>";
                echo "<h5 style='color: maroon'> &bull; equation Y'' is :  <b style='color: black'> (1/h²)*(0) </b> </h5>";
                echo "<h4 style='color: maroon'> &bull; The value Y' =<b style='color: black'> (1/$h)*(0) = $r11 </b> </h4>";
                echo "<h4 style='color: maroon'> &bull; The value  Y'' =  <b style='color: black'> (1/$h1)*(0) = $r6 </b> </h4>";
            }else{
                echo "<h5 style='color: maroon'> &bull; equation U is :  <b style='color: black'> (X-X0)/h </b> </h5>";
                echo "<h5 style='color: maroon'> &bull; The Value U =  <b style='color: black'> ($x-$x0)/$h = $u </b> </h5>";
                echo "<h5 style='color: maroon'> &bull; equation Y' is : <b style='color: black'> (1/h)*(△y0+(2u-1)△²y0/2 + (3u²-6u+2) △³y0/3  ) </b> </h2>";
                echo "<h5 style='color: maroon'> &bull; equation Y'' is :  <b style='color: black'> (1/h²)*(△²y0 +△³y0/3 ) </b> </h5>";
                echo "<h5 style='color: maroon'> &bull; The value Y' = <b style='color: black'> (1/$h)*($Δy0+(2*$u-1)*$Δny0/2 + (3*$u*$u-6*$u+2)*$Δmy0/3) = $mm </b> </h2>";
                echo "<h5 style='color: maroon'> &bull; The value Y'' =  <b style='color: black'> (1/$h1)*($Δny0 +($u-1)*$Δmy0/3 ) = $j </b> </h5>";
            }
        }
        ?>
    </div>
    


        <div class="container mb-5">
            <button class="btn btn-danger "><a class="text-white" href="numerica_differentation.php">Go Back</a></button>
    
    </div>

</body>

</html>


