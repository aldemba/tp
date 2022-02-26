<?php

include_once("fonction.php");
session_start();
if(isset($_POST["btn_ok"]))
{
    $_SESSION['post']=$_POST;
    $jour=$_POST['jours'];
    $mois=$_POST['mois'];
    $annee=$_POST['annee'];
    $tab=[];
    jourvalide($jour,"jours",$tab);
    moisvalide($mois,"mois",$tab);
    anneevalide($annee,"annee",$tab);
    datevalide($jour,$mois,$annee,"jours",$tab);
    
    if(count($tab)==0)
    {
        dateprecedent($jour,$mois,$annee);
        echo"<br><br>";
        datesuivante($jour,$mois,$annee);
    }
    else
    {
        $_SESSION['error']=&$tab;
        header('location:index.php'); 
        exit();
        //var_dump($tab);
    }

}
else
{
    header("location:index.php");
    exit();
}


?>