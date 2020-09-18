<!DOCTYPE html>
<html>
	<head>
		<title>Créer un matche</title>
		<meta charset="utf-8" lang="en"/> 
    	<link rel="stylesheet" type="text/css" href="style.css">
	</head>

    <body>
		<form class="formulaire" method="get" action="InsertMatche.php">
			<h4> Créer un nouveau matche </h4>
<?php
	require_once('../Connexion.inc.php'); //permet d'intégrer l'objet $conx à ce fichier

	$clubs = $conx->query("select id, nom from clubs")->fetchall();
	echo "<label> Equipe1 ";
	echo "<select class='input' name='guest'>";
	foreach ($clubs as $key => $value) {
		# code...
		echo "<option value=".$value['id'].">". $value['nom'] ."</option>";
	}
	echo "</select></label>";
	echo "<label> Equipe2 ";
	echo "<select class='input' name='visitor'>";
	foreach ($clubs as $key => $value) {
		# code...
		echo "<option value=".$value['id'].">". $value['nom'] ."</option>";
	}
	echo "</select></label>";
?>        
		<!-- Ajouter la date du matche, comme c'est un élément statique, on l'écrit en HTML -->
		<label> Date du matche
			<input class='input' type="date" name="date" />
		</label>
		<input class="bouton" type="submit" value="Créer" />
    </form>

    </body>

</html>