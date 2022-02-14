<?php
include_once("fonction.php");
$leCote=rand(5,15);
echo" Le cote vaut ".$leCote;
echo"<br>";
$lePerimetre=perimetre($leCote);
echo"le perimetre vaut " .$lePerimetre;
echo"<br>";
$laSurface=surface($leCote);
echo"la surface vaut " .$laSurface;
$laDiagonale=diagonale($leCote);
echo"<br>";
echo"la diagonale est ".$laDiagonale;

?>