<?php 
function echange(int $nbr1, int $nbr2 ):void
{
$temp=$nbr1;
$nbr1=$nbr2;
$nbr2=$temp;
echo"<br>";
echo" apres echange le  premier nombre vaut " .$nbr1;
echo"<br>";
echo" apres echange le second nombre vaut ".$nbr2;
}


?>