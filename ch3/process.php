<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        tr{
            display: inline-block
        }
    </style>
</head>
<body style="background-color: #CFF4FC;">
<center><h1 style="font-family:'Courier New', Courier, monospace;">divided differnces</h1></center>
<hr class="border border-info border-2 opacity-50">

<?php
include("_new.php");
?>
<div class="container mb-4">
<form action="" method="post" id="form" align="center" id="myForm">
    <table class="table">

       <tr>
        <td> <span> X0 : </span><input type="text" name="x0" id="x0" value="<?php echo @$_POST['x0']?>" required placeholder="enter x0"> </td>
        <td> <span> Y0 : </span><input type="text" name="y0" id="y0" value="<?php echo @$_POST['y0']?>" required placeholder="enter y0"> </td>
        <td>
                <?php
                 if($x3 > $x2 && $x2 > $x1 && $x1 > $x0){
                    echo "<span> [x0,x1] Is : </span> </center>" . "<input type = 'text' value = '$d0' disabled>" ."<br>" . "<span> [x1,x2] Is : </span>" . " <input type= 'text' value = '$d1' disabled>" ."<br>" ."<p style= 'margin-right:0;'> [x2,x3] Is : " . "<input type = 'text' value = '$d2' disabled></p>" ;
                  }
                  $bigSpace = str_repeat("&nbsp;", 10);
                    echo $bigSpace;
                ?>
            </td>
       
    </tr>
    
   
    <tr>
        <td><span> X1 : </span><input type="text" name="x1" id="x1" value="<?php echo @$_POST['x1']?>" required></td>
        <td><span> Y1 : </span><input type="text" name="y1" id="y1" value="<?php echo @$_POST['y1']?>" required><br>
        <td><?php 
             if($x3 > $x2 && $x2 > $x1 && $x1 > $x0){
                echo "<span>[x0,x1,x2] Is : </span>" . "<input type = 'text' value = '$d3' disabled>"."<br>" . "<span>[x1,x2,x3] Is : </span>" . "<input type = 'text' value = '$d4' disabled>" ."<br>" ;
             }
             $bigSpace = str_repeat("&nbsp;", 69);
            echo $bigSpace;
             ?>
    </td>
    </tr>
    <tr>
        <td><span> X2 : </span><input type="text" name="x2" id="x2" value="<?php echo @$_POST['x2']?>" required></td>
        <td><span> Y2 : </span><input type="text" name="y2" id="y2" value="<?php echo @$_POST['y2']?>" required></td>
        <td>
        <?php
        if($x3 > $x2 && $x2 > $x1 && $x1 > $x0){
        echo "<span>[x0,x1,x2,x3] Is : </span>" . "<input type = 'text' value = '$r' disabled>" ;

        }
        ?>
        </td>
    </tr>
    <tr>
        <td> <span> X3 : </span><input type="text" name="x3" id="x3" value="<?php echo @$_POST['x3']?>" required></td>
        <td> <span> Y3 : </span><input type="text" name="y3" id="y3" value="<?php echo @$_POST['y3']?>" required></td>
        <td>
            <?php
$bigSpace = str_repeat("&nbsp;", 69);
echo $bigSpace;
            ?>
        </td>                                                                                                           
    </tr> 
    
    </table>

       
            <b> Enter X :</b><input style="width: 25%;" type="text" name="x" id="x" value="<?php echo @$_POST['x']?>" required >
            <?php $bigSpace = str_repeat("&nbsp;", 20);
            echo $bigSpace;

            ?>
            <!-- <input type="submit" name="submit" value="Reuslt" > -->
            <button class="btn btn-danger"><a class="text-white" style="text-decoration: none;color:black" href="divided.php">Go Back</a></button>
           
        
</form>
</div>
<?php

if($x3 > $x2 && $x2 > $x1 && $x1 > $x0){
   
   
    
    echo "<center><p style='color: maroon'> The equation :Y= <b style='color: black'>$y0 + ($d0*(x-$x0)) +((x-$x0)*(x-$x1))*$d3 +((x-$x0)*(x-$x1)*(x-$x2))*$r</b> </p></center>";
    echo "<center><h4 style='color: maroon; margin-bottom: 50px;'> y($x) = <b style='color: black'> $ans </b></h4></center>";

}else{
    // echo "<center><h1 style='color: red ;'>error</h1>";
}
?>

</body>
</html>