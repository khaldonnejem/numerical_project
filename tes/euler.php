<?php 
include("_new.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Euler's Method</title>
</head>
<button class="btn btn-info" style="background-color: #07FFFF ;border-radius: 30px;position:absolute ; margin:15px 150px 0 50px"><a style="color:black;text-decoration: none;" href="/numerical_project/home.php">Back Home</a></button>
<body style="background-color: #CFF4FC;">
    <center>
        <h1  style="font-family:'Courier New', Courier, monospace;">Euler's Method</h1>
    </center>
    <hr class="border border-info border-2 opacity-50">
<div class=" container table-responsive">
    <p>&bull; given that:</p>
    <form action="" method="post">
    <table  style="width: 150px;" class="table table-sm table-bordered">
    <thead class="thead-dark">
        <tr style="text-align: center;">
            <th>#</th>
            <th> </th>
        </tr>
    </thead>
    <tbody class="bg-info">
        <tr style="text-align: center;">
            <td><b>Y&#96;</b></td>
            <td>X<sup>2</sup>+y</td>
        </tr>
        <tr>
            <td style="text-align: center;"><b>x<sub>0</sub></b></td>
            <td><input  type="text" name="x0"></td>
        </tr>
        <tr style="text-align: center;">
            <td><b>Y(x<sub>0</sub>)</b></td>
            <!-- <td>-1</td> -->
            <td><input  type="text" name="Yx0"></td>
        </tr>
        <tr style="text-align: center;">
            <td><b>h</b></td>
            <!-- <td>0.1</td> -->
            <td><input type="text"  name="h" placeholder="Step size"></td><!--step="2" -->
        </tr>
        <tr>
            <td style="text-align: center;"><b>n</b></td>
            <td><input type="text"  name="n" placeholder="Number of steps"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Result"></td>
        </tr>
    </tbody>
   
    </table>
    </form>
  
</div>

<?php
   
   if (isset($_POST['submit'])) {
       
       echo "<div class = 'container'>";
       echo "<b>The result is: y = <u> " . $y1 ."</u></b>";
       echo "</div>";
   }else{
    //    echo'error';
   }
   
   
   ?>
</body>
</html>
