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

function champs(int $n):void {
  for($i=1;$i<=$n;$i++){
      
      echo"<br><input><br>";

 }


}
?>
