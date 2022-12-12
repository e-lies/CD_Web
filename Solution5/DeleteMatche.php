</br> <a href='ListeMatche.php'> Retour à la liste des matches </a>
<?php
require_once('../Connexion.inc.php'); //permet d'intégrer l'objet $conx à ce fichier
session_start();
print_r($_SESSION);
try {
    if (isset($_SESSION['userName'])) {
        $conx->query("delete from matches where id=" . $_GET['id']);
        echo "Matche N°" . $_GET['id'] . " bien supprimé";
    } else {
        http_response_code(403);
        die("Vous n'êtes pas autorisé à effectuer cette opération");
    }
}
//Au cas ou une erreur a lieu pendant la suppression, elle sera affichée
catch (Exception $e) {
    $rslt['msg'] = "Une erreur est survenue ! " . $e;
}


?>