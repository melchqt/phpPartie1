<?php
//Déclaration de la variable object
$object = 'Objet du message';
//Déclaration de la variable message
$message = 'Contenu du message';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 1 exercice 1</title>
  </head>
  <body>
    <h1>Exercice 1</h1>
    <p>
      <!-- Commentaire html -->
      <?php
        //Commentaire php
        echo $object;
      ?>
    </p>
    <p>
      <?php echo 'Objet du message'; ?>
    </p>
    <p><?= $message; ?></p>
  </body>
</html>
