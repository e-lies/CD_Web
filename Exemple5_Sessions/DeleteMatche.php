</br> <a href='ListeMatche.php'> Retour à la liste des matches </a>
<?php
    require_once('../Connexion.inc.php'); //permet d'intégrer l'objet $conx à ce fichier
    try{
        $conx->query("delete from matches where id=".$_GET['id']);
        echo "Matche N°".$_GET['id']." bien supprimé";
    }
    //Au cas ou une erreur a lieu pendant la suppression, elle sera affichée
    catch(Exception $e){
        $rslt['msg'] = "Une erreur est survenue ! ".$e;
    }
    

?>