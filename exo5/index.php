<?php
$answer ='no';
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>exo5</title>
  </head>
  <body>
  <p>
    <?php

    if ($answer == 'yes')
    {
        echo 'Vous avez répondu oui';
    }
    elseif ($answer == 'no')
    {
        echo 'Vous avez répondu non';
    }
    ?>
  </body>
</html>
