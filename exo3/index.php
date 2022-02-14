<?php
include_once("fonction.php");
$nbr1=rand(1,10);
$nbr2=rand(1,10);
echo"le nombre 1 vaut ".$nbr1;
echo"<br>";
echo"le nombre 2 vaut ".$nbr2;
echo"<br>";
$som=somme($nbr1,$nbr2);
echo" La somme vaut " .$som;
echo"<br>";
$diff=difference($nbr1,$nbr2);
echo" La difference vaut " .$diff;
echo"<br>";
$prod=produit($nbr1,$nbr2);
echo" Le produit vaut " .$prod;
echo"<br>";
$div=division($nbr1,$nbr2);
echo" La division vaut " .$div;
echo"<br>";
$mod=modulo($nbr1,$nbr2);
echo" Le modulo vaut " .$mod;
echo"<br>";
$expo=expo($nbr1,$nbr2);
echo" L'exponentiel vaut " .$expo;
echo"<br>";







?>