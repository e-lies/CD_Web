<!DOCTYPE html>
<html>
	<head>
		<title>Création matche</title>
		<meta charset="utf-8" lang="en"/> 
    	<link rel="stylesheet" type="text/css" href="style.css">
	</head>

    <body>
        </br> <a href='ListeMatche.php'> Retour à la liste des matches </a>
<?php
    require_once('../Connexion.inc.php'); //permet d'intégrer l'objet $conx à ce fichier
    try {
        echo "<pre>"; // sert juste à afficher les tableaux de façon organisée
        print_r($_GET);
        $rep = $conx->prepare(
            "insert into matches (id_guest, id_visitor, date) values (".$_GET['guest'].",".$_GET['visitor'].",'".$_GET['date']."')"
        )->execute();
        print_r($rep);
    }
    catch(PDOException $e){
        $rslt['msg'] = "Une erreur est survenue ! ".$e;
    }
?>