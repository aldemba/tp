<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equation</title>
</head>
<body>
    <?php
    session_start();
    ?>
    <form action="controller.php" method="post">
    <label>entrez a</label> <input type="text" name="a" value="<?php if(!isset($_SESSION['error']['a']) && isset($_SESSION['post']) ) 
      echo  $_SESSION['post']['a']; else ''  ?>">
      <?php if(isset($_SESSION['error']['a'])):?>
            <span style="color:red"><?php echo $_SESSION['error']['a'] ?></span>
      <?php endif?> <br>
    <label>entrez b</label> <input type="text" name="b" value="<?php if(!isset($_SESSION['error']['b']) && isset($_SESSION['post']) ) 
      echo  $_SESSION['post']['b']; else ''  ?>">
      <?php if(isset($_SESSION['error']['b'])):?>
            <span style="color:red"><?php echo $_SESSION['error']['b'] ?></span>
      <?php endif?> <br>
       
    <label>entrez c</label> <input type="text" name="c" value="<?php if(!isset($_SESSION['error']['c']) && isset($_SESSION['post']) )
       echo  $_SESSION['post']['c']; else ''  ?>">
       <?php if(isset($_SESSION['error']['c'])):?>
      <span style="color:red"><?php echo $_SESSION['error']['c'] ?></span>
        <?php session_unset(); endif?>
    <br><input type="submit" value="valider" name="ok" >

    </form>


</body>
</html>