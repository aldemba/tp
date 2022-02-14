<?php
include_once("fonction.php");
$x1=rand(5,15);
$x2=rand(5,15);
$y1=rand(5,15);
$y2=rand(5,15);
echo" Les coordonnees de A sont x= ".$x1."et y=".$y1;
echo"<br>";
echo" Les coordonnees de B sont x= ".$x2."et y=".$y2;
$distance=distance($x1,$x2,$y1,$y2);
echo"la distance vaut " .$distance;

?>