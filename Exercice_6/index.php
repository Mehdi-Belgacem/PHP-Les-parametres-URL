<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Partie 6 Exercice 6</h1>
	<?php if (!isset($_GET['building'])): ?>
		<p>Le numéro de votre bâtiment est manquant.</p>
	<?php endif ?>
	<?php if (!isset($_GET['room'])): ?>
		<p>Le numéro de votre chambre est manquant.</p>
	<?php endif ?>
	<?php if (isset($_GET['building']) && isset($_GET['room'])) : ?>
		<p>Vous êtes dans le bâtiment <?= $_GET['building'] ?>, chambre numéro <?= $_GET['room'] ?></p>
	<?php endif ?>
	<a href="index.php?building=12&room=101">Cliquer ici </a>
</body>
</html>