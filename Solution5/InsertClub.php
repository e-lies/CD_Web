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
        //Avant de faire l'insert, on va devoir créer le fichier logo dans notre serveur, on lui donnera le nom du club
        $path = "../Images/".explode(' ',$_POST['nom'])[0].".jpg";
        move_uploaded_file($_FILES['logo']['tmp_name'],$path);
        $rep = $conx->query(
            "insert into clubs (id_pays, nom, logo) values (".$_POST['pays'].",'".$_POST['nom']."','".$path."')"
        );
        print_r($rep);
    }
    catch(Exception $e){
        $rslt['msg'] = "Une erreur est survenue ! ".$e;
    }
?>