<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Partie 6 Exercice 4</h1>
  <?php 
    if (!isset($_GET['language'])){ ?>
      <p>Language de programmation manquant.</p> <?php
    }
    if (!isset($_GET['server'])){ ?>
      <p>Serveur manquant.</p> <?php
    }
    if (isset($_GET['language']) && isset($_GET['server'])){ ?>
      <p>Vous êtes connecter sur le serveur  <?= $_GET['server'] ?> et utiliser le language <?= $_GET['language']?>.</p> <?php 
    } 
  ?>
  <a href="index.php?language=PHP&server=LAMP">Clique ici !!</a>
</body>
</html>