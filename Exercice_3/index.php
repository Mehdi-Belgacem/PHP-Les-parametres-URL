<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Partie 6 Exercice 3</h1>
  <?php 
    if (!isset($_GET['startDate'])) { ?>
      <p>La date de départ est manquante.</p> <?php
    }
    if (!isset($_GET['endDate'])) { ?>
      <p>La date d'arrivé est manquante.</p> <?php
    }
    if (isset($_GET['startDate']) && isset($_GET['endDate'])){ ?>
      <p>La date commence le  <?= $_GET['startDate'] ?> et termine le <?= $_GET['endDate'] ?>.</p> <?php
    }
  ?>
  <a href="index.php?startDate=2/05/2016&endDate=27/11/2016">Cliquer ici !!</a>
</body>
</html>