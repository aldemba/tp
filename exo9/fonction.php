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

function multiplication(int $n):void {
    
   /* avec la boucle tant que, à revoir.
    $i=1;
 while($i<=10){
  $p=$n*$i;
  $i++;
  echo"<ul>$n*$i=".$p."</ul>";
  */
  for($i=1;$i<=10;$i++){
      $p=$n*$i;
      echo"<ul>$n*$i=".$p."</ul>";

 }


}
?>
