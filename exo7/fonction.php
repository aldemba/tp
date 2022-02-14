<?php
function controle1($nbr, string $key, array &$arrError):void
{
    if(empty($nbr)){

        $arrError[$key]="veuillez saisir un nombre";
        
    }
    else{
    if(!is_numeric($nbr)){
        $arrError[$key]="vous devez saisir un nombre";
    
    }
    else{
    if($nbr<1 or $nbr>31){
        $arrError[$key]="veuillez saisir un jour valide";
    
    }    
}
    }

function controle2($nbr, string $key, array &$arrError):void
{
    if(empty($nbr)){

        $arrError[$key]="veuillez saisir un nombre";
        
                   }
    else{
    
    if(!is_numeric($nbr)){
        $arrError[$key]="vous devez saisir un nombre";
                        }
    
    else{
        if($nbr<1 or $nbr>12){
            $arrError[$key]="veuillez saisir un mois valide";
        
        }    
}
}

function controle3($nbr, string $key, array &$arrError):void
{
    if(empty($nbr)){

        $arrError[$key]="veuillez saisir un nombre";
        
    }
    else{
    if(!is_numeric($nbr)){
        $arrError[$key]="vous devez saisir un nombre";
    }
    
    else{
        if($nbr<1){
            $arrError[$key]="veuillez saisir un annee valide";
        
        }    
}
}

}
}
}

function bissextile(int $annee):bool {
    if(($annee%4)==0 and ($annee%100)!==0 or(($annee%400)==0)){
        return(true);
    }
        return(false);
}



function nbjr(int $mois, int $annee): int{
$a=bissextile($annee);
if($mois==1 or $mois==3 or $mois==5 or $mois==7 or $mois==8 or $mois==10 or $mois==12){
    return(31);

}
if($mois==4 or $mois==6 or $mois==9 or $mois==11){
    return(30);
}
if($mois==2){
    if($a){
        return(29);
    }
    else{
        return(28);
    }    


}



}


function datevalide($jour,$mois,$annee):bool{
    $j=nbjr($mois,$annee);
    if($jour<=$j){
        return(true);
    }
        return(false);
    }





function datesuivante($jour,$mois,$annee):void{
$nbr=nbjr($mois,$annee);
$v=datevalide($jour,$mois,$annee);
{
if($v){
  if($jour<$nbr){
    $jour=$jour+1;
           }
           else{
             $jour=1;
             $mois=$mois+1;
           }

       if($mois>12 ){
        $mois=1;
        $annee=$annee+1;
    }  
    echo("la date suivante est ".$jour."/".$mois."/".$annee);
    } 
    else{
        echo"date invalide";
}
}
}


function dateprecedente($jour,$mois,$annee):void{
    $nbr=nbjr($mois,$annee);
    $v=datevalide($jour,$mois,$annee);
    {
    if($v){
      if($jour<$nbr){
        $jour=$jour-1;
               }
               {
                   if($jour==1){
                 
                 $mois=$mois-1;
                 $jour=$nbr;
               }
            }
           if($mois==12 ){
            $mois=1;
            $annee=$annee+1;
        }  
        echo("la date precedente est ".$jour."/".$mois."/".$annee);
        } 
        else{
            echo"date invalide";
    }
    }
    }
    








  
?>
