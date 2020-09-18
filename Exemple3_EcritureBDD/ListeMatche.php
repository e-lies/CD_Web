<!DOCTYPE html>
<html>
	<head>
		<title>Liste des matches</title>
		<meta charset="utf-8" lang="en"/> 
    	<link rel="stylesheet" type="text/css" href="style.css">
	</head>

    <body>
        <a href="FormInsertMatche.php" id="ajoutMatche"> Créer un matche </a>
<?php
    require_once('../Connexion.inc.php'); //permet d'intégrer l'objet $conx à ce fichier

    //Récupération de la liste des matches
    $matches = $conx->query(
        "select matches.id, matches.score_guest, matches.score_visitor, matches.date,
        (select nom from clubs where id = matches.id_guest) AS 'nom_guest',
        (select logo from clubs where id = matches.id_guest) AS 'logo_guest',
        (select nom from clubs where id = matches.id_visitor) AS 'nom_visitor',
        (select logo from clubs where id = matches.id_visitor) AS 'logo_visitor'
        from matches"
    )->fetchall(); //La méthode fetchall va récupérer tout le résultat de la requete dans un tableau, chaque élément du tableau sera un objet contenant toutes les colonnes de BDD séléctionnées
    echo "<ul>";
    foreach ($matches as $key => $value) {
        //Afficher la liste des matches récupérés, vous pouvez baser vos classes en fonction du fichier CSS
            #code...
    }
     echo "</ul>";
?>
    </body>    
</html>