<!DOCTYPE html>
<html>
	<head>
		<title>Exp02</title>
		<meta charset="utf-8" lang="en"/> 
    	<link rel="stylesheet" type="text/css" href="style.css">
	</head>

    <body>

<?php
    require_once('../Connexion.inc.php'); //permet d'intégrer l'objet $conx à ce fichier

    //Récupérer la liste de tous les clubs avec leur pays
    $clubs = $conx->query("select pays.nom AS 'Pays', pays.flag AS 'Drapeau', clubs.nom AS 'Club', clubs.logo AS 'Logo' from pays JOIN clubs ON pays.id = clubs.id_pays")->fetchall();

    //Il faudra d'abord construire un nouveau tableau ou les clubs seront regroupés par pays
    $groupedTab = [];
    foreach ($clubs as $key => $value) { //à chaque étape, $value sera une ligne de résultat de la requête 
        # code...
    }
?>
    <ul>
<?php //On peut déclarer plusieurs balises <?php dans un seul fichier, le code à l'exterieur sera envoyé au client de façon brute.
    foreach ($groupedTab as $nation => $value) { //ici les keys donneront les pays, et les values seront le tableau que contient chaque pays (nom et logo)
        #code...
        foreach 
            # code... 
            
        }
        #code...
    }
    echo "</ul>";
?>
    </ul>
    </body>    
</html>