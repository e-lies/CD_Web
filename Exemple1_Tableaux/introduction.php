<!DOCTYPE html>
<html>
	<head>
		<title>Exp01</title>
		<meta charset="utf-8" lang="en"/> 
    	<link rel="stylesheet" type="text/css" href="style.css">
	</head>

    <body>


<?php
//Dans cet exercice, nous cherchons à afficher une liste groupée en HTML, elle contiendra des clubs de football regroupés par pays.
//L'objectif est d'analyser la façon avec laquelle du code serveur (php ici), va "fabriquer" du code client (HTML ici), et de se familliariser avec les structures de tableaux php
    $teams = array(
        "Espagne"=>array(
            array("name"=>"FC Barcelona", "logo"=>"https://upload.wikimedia.org/wikipedia/fr/thumb/a/a1/Logo_FC_Barcelona.svg/1200px-Logo_FC_Barcelona.svg.png"),
            array("name"=>"Real Madrid","logo"=>"https://upload.wikimedia.org/wikipedia/fr/thumb/c/c7/Logo_Real_Madrid.svg/1200px-Logo_Real_Madrid.svg.png"),
            array("name"=>"FC Valencia","logo"=>"https://img2.freepng.fr/20181125/ay/kisspng-valencia-cf-la-liga-fc-barcelona-football-dateifc-valencia-7-er-svg-wikipedia-5bfb086f37eda1.5889403215431783512291.jpg")
        ),
        "Italie"=>array(
            array("name"=>"Juventus Torino", "logo"=>"https://upload.wikimedia.org/wikipedia/fr/thumb/9/9f/Logo_Juventus.svg/1200px-Logo_Juventus.svg.png"),
            array("name"=>"AC Milano", "logo"=>"https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Logo_of_AC_Milan.svg/1200px-Logo_of_AC_Milan.svg.png"),
        ),
        "Angleterre"=>array(
            array("name"=>"Manchester United", "logo"=>"https://upload.wikimedia.org/wikipedia/fr/thumb/b/b9/Logo_Manchester_United.svg/1200px-Logo_Manchester_United.svg.png"),
            array("name"=>"FC Chelsea", "logo"=>"https://upload.wikimedia.org/wikipedia/fr/thumb/5/51/Logo_Chelsea.svg/1200px-Logo_Chelsea.svg.png"),
            array("name"=>"FC Liverpool", "logo"=>"https://upload.wikimedia.org/wikipedia/fr/thumb/5/54/Logo_FC_Liverpool.svg/1200px-Logo_FC_Liverpool.svg.png")
        ),
        "Allemangne"=>array(
            array("name"=>"Bayern Munich", "logo"=>"https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/FC_Bayern_M%C3%BCnchen_logo_%282017%29.svg/1200px-FC_Bayern_M%C3%BCnchen_logo_%282017%29.svg.png"),
            array("name"=>"Borussia Dortmund", "logo"=>"https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Borussia_Dortmund_logo.svg/1200px-Borussia_Dortmund_logo.svg.png")
        )
    );
?>
    <ul>
<?php //On peut déclarer plusieurs balises <?php dans un seul fichier, le code à l'exterieur sera envoyé au client de façon brute.
    foreach ($teams as $nation => $value) { //ici les keys donneront les pays, et les values seront le tableau que contient chaque pays
        #code...
        foreach 
            #code...     
        }
        #code...
    }
    echo "</ul>";
?>
    </ul>
    </body>    
</html>