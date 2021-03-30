<!DOCTYPE html>
<html>
	<head>
		<title>Créer un matche</title>
		<meta charset="utf-8" lang="en"/> 
    	<link rel="stylesheet" type="text/css" href="style.css">
	</head>

    <body>
        <form class="formulaire" method="get" action="UpdateMatche.php">
		    <h4> Mettre à jour le score </h4>
<?php
	require_once('../Connexion.inc.php'); //permet d'intégrer l'objet $conx à ce fichier
    //mettre le contenu de la variable superglobale $_GET dans des variables plus simple à écrire
    $matche = $_GET['id'];
    $guest = $_GET['guest'];
    $score_guest = $_GET['score_guest'];
    $visitor = $_GET['visitor'];
    $score_visitor = $_GET['score_visitor'];
    //envoyer le "id" du matche de façon invisible
    echo "<input type='hidden' name='id' value=".$matche." />" ;
    echo "<div class='score' style='max-width:750px'>";
    //nom de l'équipe qui joue à domicile
    echo "<label> ".$guest;
    //score de l'équipe qui joue à domicile
    echo " <input type='number' name='score_guest' value=".$score_guest." /></label>";
    echo " __ ";
    //score de l'équipe qui joue à l'exterieur
    echo "<label><input type='number' name='score_visitor' value=".$score_visitor." /> ";
    //nom de l'équipe qui joue à l'exterieur
    echo $visitor."</label>";
    echo "</div>";
?>
        <input class="bouton" type="submit" value="Mettre à jour" />
    </form> 