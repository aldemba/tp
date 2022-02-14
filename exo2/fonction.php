<?php
function perimetre(int $longueur, int $largeur):int
{
    return(($longueur+$largeur)*2);
}
function surface(int $longueur, int $largeur):int
{
    return($longueur*$largeur);
}
function diagonale(int $longueur, int $largeur):float
{
    return(sqrt(pow($longueur,2)+pow($largeur,2)));
}

?>