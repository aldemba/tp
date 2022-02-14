<?php 
function perimetre(int $cote):int
{
    return($cote*4);
}
function surface(int $cote):int
{
    return($cote*$cote);
}
function diagonale(int $cote):float
{
    return(sqrt(2*pow($cote,2)));
}

?>