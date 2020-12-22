<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Partie 6 Exercice 5</h1>
  <?php 
    if (!isset($_GET['week'])){ ?>
      <p>Semaine manquante.</p> <?php
    }
    if (isset($_GET['week'])){ ?>
      <p>Nous sommes à la semaine <?= $_GET['week'] ?>.</p> <?php
    }
  ?>
  <a href="index.php?week=12">Cliquer ici.</a>
</body>
</html>