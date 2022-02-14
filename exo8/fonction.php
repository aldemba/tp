<?php
function controle($nbr, string $key, array &$arrError):void
{
    if(empty($nbr)){

        $arrError[$key]="veuillez saisir un nombre";
        
    }
    else{
    if(!is_numeric($nbr)){
        $arrError[$key]="vous devez saisir un nombre";
    }
    
    else{
        if($nbr<=0){
            $arrError[$key]="entrez un nombre positif";    
        }
    }
    }
}

function affichage(int $n):void {
    
  for($i=2;$i<$n;$i++){
     echo" <ul><li>$i</li></ul>";

 }


}
?>
