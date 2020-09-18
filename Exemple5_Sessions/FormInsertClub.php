<!DOCTYPE html>
<html>
	<head>
		<title>Créer une équipe</title>
		<meta charset="utf-8" lang="en"/> 
    	<link rel="stylesheet" type="text/css" href="style.css">
	</head>

    <body>
        <!-- On utilisera la méthode POST puisqu'on envoie des fichiers -->
		<form class="formulaire" method="post" action="InsertClub.php" enctype="multipart/form-data">
            <h4> Créer un nouveau club </h4>
            <label for="pays"> Pays
        <?php
            require_once('../Connexion.inc.php'); //permet d'intégrer l'objet $conx à ce fichier
            //Récupérer la liste des pays pour les proposer dans une liste
            $pays = $conx->query("select id, nom from pays")->fetchall();
            echo "<select class='input' name='pays' id='pays'>";
            foreach ($pays as $key => $value) {
                //Ce qui sera visible pour l'utilisateur sera le nom du pays, mais c'est le id qui sera envoyé
                echo "<option value='".$value['id']."'> ".$value['nom']."</option>";
            }
            echo "</select></label>";
        ?>
            <label for="nom"> Nom 
            <input class='input' type="text" id="nom" name="nom" />
            </label>
            <label for="logo"> Logo 
            <input class='input' type="file" id="logo" name="logo" accept="image/png, image/jpeg" />
            </label>
            <input class="bouton" type="submit" value="Créer" />
        </form>
    </body>