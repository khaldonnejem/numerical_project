<html>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <link rel="stylesheet" href="line.css">
    <title>secant method</title>
</head>

<body style="background-color: #CFF4FC;">


<button class="btn btn-info" style="background-color: #07FFFF ;border-radius: 30px;position:absolute ; margin:15px 150px 0 50px"><a style="color:black;text-decoration: none;" href="/numerical_project/home.php">Back Home</a></button>
<h1 style="font-family: 'Courier New', Courier, monospace;"> <center>  Secant method </center></h1>
<hr class="border border-info border-2 opacity-50">
<center>

    <form class="container" method="post" action="">
        <table class="table"" align="center" >
            <tr>
                <td> <input type="number" name="x^3" placeholder=" Enter X³" >  </td>
                <td> <label> <b>+</b> </label></td>
                <td><input type="number" name="x^2"  placeholder="Enter X²"> </td>
                <td> <label> <b>+</b> </label></td>
                <td><input type="number" name="x^1" placeholder="Enter X"> </td>
                <td> <label> <b>+</b> </label></td>

                <td><input type="number" name="constant" placeholder="Enter Constant" ></td>
            </tr>
            <tr align="center">
                <td colspan="7">  <input class="btn btn-info" type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>


<?php
echo"<center>";
if(isset($_POST['submit'])) {
    $a = $_POST['x^3'];
    $b = $_POST['x^2'];
    $c = $_POST['x^1'];
    $d = $_POST['constant'];

    function func($x,$a,$b,$c,$d)
    {
        return $a*($x * $x * $x) + $b*($x * $x) + $c*($x) + $d;
    }
    $flag = false;
    $first = -100;
    $second = -99;
    while($flag == false){
        $interv1 = func($first,$a,$b,$c,$d);
        $interv2 =func($second,$a,$b,$c,$d);
        if($interv1 * $interv2 < 0){
            echo"<p class='line-1 anim-typewriter'>The required interval is [".$first.",".$second."] " . "</p>";
            echo" <br>";
            $X2=(($first* $interv2)-($second*$interv1))/($interv2 - $interv1);
            echo "<p class='line-1 anim-typewriter'>The First root is :".$X2 . "<p>";

            echo"<br>";
             $x3 = (($second*(func($X2,$a,$b,$c,$d)))- ($X2*($interv2)))/((func($X2,$a,$b,$c,$d)-$interv2));
             echo "<p class='line-1 anim-typewriter'>The Second root is :".$x3 ."</p>";

            echo"<br>";
            $x4 = (($X2*(func($x3,$a,$b,$c,$d)))- ($x3*(func($X2,$a,$b,$c,$d))))/
                  ((func($x3,$a,$b,$c,$d)- func($X2,$a,$b,$c,$d)));
            echo "<p class='line-1 anim-typewriter'>The Thrid root is :".$x4 . "</p>";
             $flag = true;
            exit;
        }
        else{
            $flag = false;
            $first = $first +1;
            $second = $second +1;
        }
    }
}
echo"</center>";
?>
