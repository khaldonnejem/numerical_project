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
$xnn0 = $xn0 *$x0;
$xnn1 = $xn1 *$x1;
$xnn2 = $xn2 *$x2 ;
$xnn3 = $xn3 *$x3;
$xnn = $xnn0+$xnn1+$xnn2+$xnn3;
$xm0 = $xn0*$xn0 ;
$xm1 = $xn1 *$xn1 ;
$xm2 = $xn2 * $xn2 ;
$xm3 = $xn3 * $xn3;
$xm = $xm0+$xm1+$xm2+$xm3;
$xny0 = $xn0 * $y0;
$xny1 = $xn1 * $y1;
$xny2 = $xn2 * $y2;
$xny3 = $xn3 * $y3;
$xny = $xny0 +$xny1+$xny2 +$xny3 ;
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
$mo = $n*(($xn*$xm) - ($xnn * $xnn) ) - ($rx * (($rx*$xm) - ($xnn * $xn ))) + ($xn *  (($rx * $xnn) - ($xn * $xn))) ;
$ma0 = $ry*(($xn*$xm) - ($xnn * $xnn) ) - ($rx * (($xyn*$xm) - ($xnn * $xny ))) + ($xn *  (($xyn * $xnn) - ($xn * $xny))) ;
$ma1 = $n*(($xyn*$xm) - ($xnn * $xny) ) - ($ry * (($rx*$xm) - ($xnn * $xn ))) + ($xn *  (($rx * $xny) - ($xyn * $xn))) ;
$ma2 = $n*(($xn*$xny) - ($xyn * $xnn) ) - ($rx * (($rx*$xny) - ($xyn * $xn ))) + ($ry *  (($rx * $xnn) - ($xn * $xn))) ;

// $a1 = ($xyn - ($n * $yy * $xx) )/($xn - ($n*$xx*$xx));
$a1 = ($xn - ($n*$xx*$xx)) ? ($xyn - ($n * $yy * $xx) )/($xn - ($n*$xx*$xx)) : 0 ;
// $a0 =$ma0 / $mo  ;
$a0 = $mo ? $ma0 / $mo : 0;
// $a1 =$ma1 / $mo  ;
$a1 = $mo ? $ma1 / $mo :0 ;
// $a2 =$ma2/ $mo  ;
$a2 = $mo ? $ma2 / $mo : 0;

//    $cc= pow(0.5,($xn - ($n*$xx*$xx) ));
// $cc= ($xyn - ($n * $yy * $xx) )  / (sqrt(($yn - ($n*$yy*$yy) )) *sqrt(($xn - ($n*$xx*$xx) )));
$cc= (sqrt(($yn - ($n*$yy*$yy) )) *sqrt(($xn - ($n*$xx*$xx) ))) ?  ($xyn - ($n * $yy * $xx) )  / (sqrt(($yn - ($n*$yy*$yy) )) *sqrt(($xn - ($n*$xx*$xx) ))) : 0 ;
//    $cc= ($xyn - ($n * $yy * $xx) )/(pow(0.5,($xn - ($n*$xx*$xx) )) * pow(0.5,($yn - ($n*$yy*$yy) )));


?>