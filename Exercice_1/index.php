<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Partie 6 Exercice 1:</h1>
  <?php 
    if (!isset($_GET['lastname'])){ ?>
    <p>Votre nom est manquant.</p> <?php
    } 
    if (!isset($_GET['firstname'])){ ?>
      <p>Votre prénom est manquant.</p> <?php
    } 
    if (isset($_GET['lastname']) && isset($_GET['firstname'])) { ?>
      <p>Bonjour <strong><?= $_GET['lastname'] ?></strong> <?= $_GET['firstname'] ?> .</p><?php
    }
  ?>
  <a href="index.php?lastname=Nemare&firstname=Jean">Cliquer ici!!</a>
</body>
</html>