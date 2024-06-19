<?php
$host = 'localhost';  // ou l'adresse du serveur de la base de données
$dbname = 'stage_meps_';
$username = 'root';
$password = '';  // Le mot de passe pour se connecter à la base de données

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Mise à jour de la requête SQL pour inclure email_auteur
     $sql = "INSERT INTO messages (texte, email_auteur) VALUES (:texte, :email_auteur);";
     $stmt = $pdo->prepare($sql);
     
     // Vérification que les champs du formulaire ne sont pas vides
     if (empty($_POST['texte']) || empty($_POST['email_auteur'])) {
         die('Les champs texte et email sont obligatoires.');
     }
 
     // Liaison des paramètres
     $stmt->bindParam(':texte', $_POST['texte']);
     $stmt->bindParam(':email_auteur', $_POST['email_auteur']);
 
     $stmt->execute();
     echo "Message et email envoyés avec succès!";
     $stmt->execute();
 } catch (PDOException $e) {
     die("Erreur de connexion : " . $e->getMessage());
 }
?>
