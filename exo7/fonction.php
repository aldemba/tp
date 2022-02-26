<?php


function vide($jours):bool
{
    return(empty($jours));
}
function bissextile($annee):bool
{
  if (($annee%4==0 && ($annee%100<>0)) or ($annee%400==0))
  {
      return true ;
  }
  else return false ;
}
function jourvalide($j,string $cle,array &$tab):void
{
    if(vide($j))
    {
        $tab[$cle]="Veuillez saisir le champ jour ";
    }
    else
    {
        if(is_numeric($j))
        {
            if($j>31 or $j<1)
            {
                $tab[$cle]="Veuillez saisir un nombre entre 1 et 31";
            }

        }
        else
        {
            $tab[$cle]="Veuillez saisir un nombre dans le champ jour ";

        }

    }
}
function moisvalide($mois,string $cle,array &$tab):void
{
    if(vide($mois))
    {
        $tab[$cle]="Veuillez saisir le champ mois ";
    }
    else
    {
        if(is_numeric($mois))
        {
            if($mois>12 or $mois<1)
            {
                $tab[$cle]="Veuillez saisir un nombre entre 1 et 12";
            }

        }
        else
        {
            $tab[$cle]="Veuillez saisir un nombre dans le champ mois ";

        }

    }
}

function anneevalide($annee,string $cle,array &$tab):void
{
    if(vide($annee))
    {
        $tab[$cle]="Veuillez saisir le champ annee ";
    }
    else
    {
        if(!is_numeric($annee))
        
            
        {
            $tab[$cle]="Veuillez saisir un nombre dans le champ annee ";

        }

    }
}

function datevalide($j,$m,$annee,string $cle,array &$tab):void
{
    $nb=nombrejour($m,$annee);

    if($j>$nb)
    {
        $tab[$cle]="Date invalide !!! ";
    }
}
function nombrejour($mois,$annee):int
{
    if($mois==4 or $mois==6 or $mois==9 or $mois==11)
    {
        return 30;

    }
    else
    {
        if($mois==2)
        {
            if(bissextile($annee))
            {
                return 29;
            }
            else
            {
                return 28;
            }
        }
        else
        {
            return 31;

        }
    }
    

}
function datesuivante($jours,$mois,$annee):void
{
    if($jours!=nombrejour($mois,$annee))
    {
        $jours=$jours+1;
    }
    else
    {
        $jours=1;

        if($mois==12)
        {
            $mois=1;

            $annee++;
        }
        else
        {
            $mois++;
        }
    }
    echo 'la date suivante est le '.$jours.' /'.$mois.'/  '.$annee ;
}

function dateprecedent($jours,$mois,$annee):void
{
    $nb=nombrejour($mois,$annee);
    
    if($jours!=1)
    {
            
        $jours=$jours-1;

            
    }
    else
    {
        if($mois==1)
        {
            $mois=12;
            $jours=31;
            $annee--;   
        }
        else
        {
            $jours=$nb;
            $mois--;

        }
    }
    
    echo 'la date precedente est le '.$jours.' /'.$mois.'/  '.$annee ;
}


?>