<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Partie 6 Exercice 2:</h1>
  <?php 
  if (!isset($_GET['age'])){ ?>
    <p>Vous n'avez pas indiquer votre age.</p> <?php
  }
  if (!isset($_GET['lastname'])){ ?>
    <p>Votre nom est manquant.</p> <?php
  }
  if (!isset($_GET['firstname'])){ ?>
    <p>Votre prénom est manquant.</p> <?php
  }
  if (isset($_GET['age']) && isset($_GET['lastname']) && isset($_GET['firstname'])){ ?>
    <p>Bonjour <?= $_GET['lastname'] ?> <?= $_GET['firstname'] ?> vous avez <?= $_GET['age'] ?> ans.</p> <?php
  }?>
</body>
</html>