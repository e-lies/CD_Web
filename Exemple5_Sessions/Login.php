<?php
    require_once('../Connexion.inc.php'); //permet d'intégrer l'objet $conx à ce fichier
    session_start();

    //Requete qui va vérifier si l'utilisateur existe, et récupérer son nom et son pays si c'est le cas
        #code...

    if(isset($user['id']) && isset($user['nom'])){ // si l'utilisateur existe, ces variables existeront et la fonction donnera true
        //Mettre les données qu'on veut garder en session dans la variable super-globale $_SESSION
            #code...
        echo "Bienvenu ".$_SESSION['userName'];
        //Cette fonction permet de rediriger automatiquement vers une autre page
        header('Location: ListeMatche.php');
    }
    else{
        echo "<h3> Utilisateur innexistant ou mot de passe invalide </h3>";
        echo "<a href='index.html'> Revenir à l'identification </a>";
    }
?>