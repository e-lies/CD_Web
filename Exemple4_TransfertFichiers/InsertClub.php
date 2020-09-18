<!DOCTYPE html>
<html>
	<head>
		<title>Création club</title>
		<meta charset="utf-8" lang="en"/> 
    	<link rel="stylesheet" type="text/css" href="style.css">
	</head>

    <body>
        </br> <a href='ListeMatche.php'> Retour à la liste des matches </a>
<?php
    require_once('../Connexion.inc.php'); //permet d'intégrer l'objet $conx à ce fichier
    try {
        echo "<pre>"; // sert juste à afficher les tableaux de façon organisée
        print_r($_POST);
        print_r($_FILES);
        //Mettre le logo dans le dossier Images et créer l'enregistrement dans la BDD avec le nouveau nom du logo
            #code...
        print_r($rep);
    }
    catch(Exception $e){
        $rslt['msg'] = "Une erreur est survenue ! ".$e;
    }
?>