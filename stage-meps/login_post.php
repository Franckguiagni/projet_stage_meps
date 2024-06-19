<?php
session_start();
require_once 'database_connection.php';

// Vérifie si la méthode POST est utilisée
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $matricule_agent = $_POST["matricule_agent"] ?? '';
    $email = $_POST["email"] ?? '';
    $password = $_POST["password"] ?? '';

    // Initialisation du message d'erreur
    $_SESSION['error_login'] = "";

    // Préparation et exécution de la requête
    $requete = 'SELECT email, password FROM users WHERE email = :email AND matricule_agent = :matricule_agent';
    $stmt = $pdo->prepare($requete);

    if ($stmt && $stmt->execute(['email' => $email, 'matricule_agent' => $matricule_agent])) 
    {
        if ($stmt->rowCount() === 1) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($password, $user['password'])) {
                // Authentification réussie
                $_SESSION['email'] = $email;
                header('location: espace_agent.php');
                exit;
            }
        }
    }

    // Authentification échouée
    $_SESSION['error_login'] = "ERREUR DE CONNEXION";
    header('location: login.php');
}
