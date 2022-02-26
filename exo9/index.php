<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication</title>
</head>
<body>

<style>
    
    body{
      background-color: yellow;
    }
  
    form{
      margin-left: 39%;
      margin-top: 20%;
    }
    .inp{
      border-radius: 2rem;
      height: 3rem;
      margin-left: 0.5%;
    }
    .inp2{
      margin-top: 2%;
      background-color: orange;
      height: 2%;
    }
    label{
      text-transform: capitalize;
    }
    
  
    </style>

    <?php
    session_start();
    ?>
    <form action="controller.php" method="post">
    <label>entrez N:</label> <input class="inp" type="text" name="N" value="<?php if(!isset($_SESSION['error']['N']) && isset($_SESSION['post']) ) 
      echo  $_SESSION['post']['N']; else ''  ?>">
      <?php if(isset($_SESSION['error']['N'])):?>
            <span style="color:red"><?php echo $_SESSION['error']['N'] ?></span>
            <?php session_unset(); endif?> <br>
      <input class="inp2" type="submit" value="valider" name="ok" >

    </form>

</body>
</html>