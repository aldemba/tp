<?php
include_once("fonction.php");
$laLongeur=rand(5,15);
$laLargeur=rand(5,15);
echo" La Longueur vaut ".$laLongeur;
echo"<br>";
echo" La Largeur vaut ".$laLargeur;
echo"<br>";
$lePerimetre=perimetre($laLongeur,$laLargeur);
echo"le perimetre vaut ".$lePerimetre;
echo"<br>";
$laSurface=surface($laLongeur,$laLargeur);
echo"la surface vaut ".$laSurface;
$laDiagonale=diagonale($laLongeur,$laLargeur);
echo"<br>";
echo"la diagonale vaut ".$laDiagonale;

?>