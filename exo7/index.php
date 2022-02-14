<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date</title>
</head>
<body>
    <?php
    session_start();
    ?>
    <form action="controller.php" method="post">
    <label>entrez le jour:</label> <input type="text" name="jour" value="<?php if(!isset($_SESSION['error']['jour']) && isset($_SESSION['post']) ) 
      echo  $_SESSION['post']['jour']; else ''  ?>">
      <?php if(isset($_SESSION['error']['jour'])):?>
            <span style="color:red"><?php echo $_SESSION['error']['jour'] ?></span>
            <?php endif?> <br>
      <br>
    <label>entrez le mois:</label> <input type="text" name="mois" value="<?php if(!isset($_SESSION['error']['mois']) && isset($_SESSION['post']) ) 
      echo  $_SESSION['post']['mois']; else ''  ?>">
      <?php if(isset($_SESSION['error']['mois'])):?>
            <span style="color:red"><?php echo $_SESSION['error']['mois'] ?></span>
            <?php endif?> <br>
<br>
    <label>entrez l'annee:</label> <input type="text" name="annee" value="<?php if(!isset($_SESSION['error']['annee']) && isset($_SESSION['post']) ) 
      echo  $_SESSION['post']['annee']; else ''  ?>">
      <?php if(isset($_SESSION['error']['annee'])):?>
            <span style="color:red"><?php echo $_SESSION['error']['annee'] ?></span>
            <?php session_unset(); endif?> <br>
            <br>

      <input type="submit" value="valider" name="ok" >

    </form>
</body>
</html>
