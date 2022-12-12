<?php
try //Le try et catch seront utilisés pour controller les erreurs éventuelles lors de la connexion à la BDD
{
    //ici, l'objet $conx sera une connexion vers la base de données "ige40"
    //la deuxième option  du constructor PDO sera le username du serveur BDD, et le troisième et le password (vide dans mon cas)
    //les options à la fin permettent d'afficher les exceptions et les erreurs sql (puisque php ne sait pas le faire)
    $conx = new PDO('mysql:host=127.0.0.1;dbname=cyber_security;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)

{
    die('Erreur : '.$e->getMessage());
}
