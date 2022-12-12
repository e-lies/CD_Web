<!DOCTYPE html>
<html>

<head>
    <title>Liste des matches</title>
    <meta charset="utf-8" lang="en" />
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <a href="Logout.php" style="float:right;margin:20px"> <button class="delete"> Se déconnecter </button> </a> </br>
    <a href="FormInsertClub.php" id="ajoutClub"> Créer un club </a> </br>
    <a href="FormInsertMatche.php" id="ajoutMatche"> Créer un matche </a> </br></br>
    <?php
    session_start();
    require_once('../Connexion.inc.php'); //permet d'intégrer l'objet $conx à ce fichier

    //Meesage personnalisé grace aux sessions
    echo " <p> Bienvenu  <strong>" . $_SESSION['userName'] . "</strong>, voici les matches de votre équipe";
    //Récupération de la liste personnalisée des matches
    $matches = $conx->query(
        "select matches.id, matches.score_guest, matches.score_visitor, matches.date,
        (select nom from clubs where id = matches.id_guest) AS 'nom_guest',
        (select logo from clubs where id = matches.id_guest) AS 'logo_guest',
        (select nom from clubs where id = matches.id_visitor) AS 'nom_visitor',
        (select logo from clubs where id = matches.id_visitor) AS 'logo_visitor'
        from matches"
    )->fetchall();
    echo "<ul>";
    foreach ($matches as $key => $value) {
        # code...
        //Créer un élément de liste pour chaque matche
        echo "<li class='matcheRow'> ";
        //Logo, Nom et scroe de l'équipe "Guest" (celle qui joue à domicile)
        echo "<div class='score'> <img width='50px' height='50px' class='logo' alt='" . $value['nom_guest'] . "' src='" . $value['logo_guest'] . "' />";
        echo "<p> " . $value['nom_guest'] . " </p>";
        echo "<h4> " . $value['score_guest'] . " </h4>";
        echo " __ ";
        //Logo, Nom et scroe de l'équipe "Visitor" (celle qui joue à l'exterieur)
        echo "<h4> " . $value['score_visitor'] . " </h4>";
        echo "<p> " . $value['nom_visitor'] . " </p>";
        echo "<img width='50px' height='50px' class='logo' alt='" . $value['nom_visitor'] . "' src='" . $value['logo_visitor'] . "' /> </div>";
        //La date du matche
        echo "<h5 class='dateMatche'> Le " . $value['date'] . " </h5>";
        // Un bouton pour modifier le score de la rencontre, et un autre pour la supprimer, comme ils n'agiront que sur 1 seul matche, ils devront envoyer l'id de ce matche
        echo "<a href='FormUpdateMatche.php?id=" . $value['id'] . "&guest=" . $value['nom_guest'] . "&visitor=" . $value['nom_visitor'] . "&score_guest=" . $value['score_guest'] . "&score_visitor=" . $value['score_visitor'] . "'> <button class='update'> Modifier Score </button> </a>";
        echo "<a href='DeleteMatche.php?id=" . $value['id'] . "'> <button class='delete'> Supprimer </button> </a>";
        echo "</li>";
    }
    echo "</ul>";
    ?>
</body>

</html>