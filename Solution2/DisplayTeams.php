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
        //ajouter un tableau avec le nom et le logo du club
        $groupedTab[$value['Pays']][] = array('Club' => $value['Club'],'Logo' => $value['Logo']);
    }
?>
    <ul>
<?php //On peut déclarer plusieurs balises <?php dans un seul fichier, le code à l'exterieur sera envoyé au client de façon brute.
    foreach ($groupedTab as $nation => $value) { //ici les keys donneront les pays, et les values seront le tableau que contient chaque pays (nom et logo)
        echo "<li id=".$nation."> ".$nation." : ";        //Afficher le nom du pays
        echo "<ol>"; //Créer à chaque fois une sous-liste numérotée pour les équipes
        foreach ($value as $num => $team) { //ici, les keys n'ont pas de nom, ça sera des numéros (0,1,2....), et la value sera à chaque fois un tableau représentant le nom et le logo de l'équipe
            # code... 
            echo "<li class='teamRow'> ".intval($num+1).". ".$team['Club']." <img width='50px' height='50px' class='logo' alt='".$team['Club']."' src='".$team['Logo']."' /> </li>";
        }
        echo "</ol>";
    }
    echo "</ul>";
?>
    </ul>
    </body>    
</html>