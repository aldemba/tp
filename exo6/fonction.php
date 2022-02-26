<?php
function controle($nbr, string $key, array &$arrError):void
{
    if(empty($nbr)){
        

        $arrError[$key]="veuillez saisir un nombre";
        
    }
    else{
    if(!is_numeric($nbr)){
        $arrError[$key]="vous devez entrer un nombre";
    }
    }
}
function equation($a,$b,$c):void
{
    $d=pow($b,2)-4*$a*$c;
    if($d==0){
       $solution0=(-1*$b/2*$a); 
       echo"la solution est ".$solution0;  
    }
    else{
        if($d<0){
        echo"pas de solution";
    
    }else{
        
        $solution1=((-1*$b-sqrt($d))/(2*$a));
        $solution2=((-1*$b+sqrt($d))/(2*$a));
        echo "la premiere solution est".$solution1."<br>";  
        echo "la deuxieme solution est".$solution2 ;  

    }

    }
}
