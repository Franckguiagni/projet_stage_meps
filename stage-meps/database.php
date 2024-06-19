<?php
    try {
        // On se connecte à MySQL
        $pdo = new PDO('mysql:host=localhost;dbname=stage_meps_;charset=utf8','root', '');
    } catch (Exception $e) {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : ' . $e->getMessage());
    }
    // Si tout va bien, on peut continuer

    // On récupère tout le contenu de la table recipes
    $requete1 = 'SELECT * FROM inscription';
    $requete2 = 'SELECT * FROM sexes';

   


    $inscriptionsPrepare = $pdo->prepare($requete1);
    $inscriptionsPrepare->execute();
    $inscriptions = $inscriptionsPrepare->fetchAll();
?>