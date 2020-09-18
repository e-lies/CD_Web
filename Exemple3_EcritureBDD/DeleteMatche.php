</br> <a href='ListeMatche.php'> Retour à la liste des matches </a>
<?php
    require_once('../Connexion.inc.php'); //permet d'intégrer l'objet $conx à ce fichier
    try{
        //Ecrire une requete qui doit supprimer le matche qui a l'id contenu dans $_GET['id']
            #code...
        echo "Matche N°".$_GET['id']." bien supprimé";
    }
    //Au cas ou une erreur a lieu pendant la suppression, elle sera affichée
    catch(Exception $e){
        $rslt['msg'] = "Une erreur est survenue ! ".$e;
    }
    

?>