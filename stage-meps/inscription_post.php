<?php
  // Initialiser les variables qui sont en session et Charger la base de donnees
  session_start();
  require_once 'database_connection.php';
  
// Préparation de la requête INSERT
$sql = "INSERT INTO inscription (matricule_agent, 
nom, prenoms, date_naissance, sexes_id, statuts_id, nom_prenoms_pere, 
nom_prenoms_mere, situations_matrimoniale_id, nombre_enfants, emploi_precedent, 
grades_id, fonction_actuelle, contact, email, photo) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Préparation de la requête
$pdo_prepare_inscription = $pdo->prepare($sql);

// Récupération des données du formulaire
$data_inscription = [
    $_POST['matricule_agent'], $_POST['nom'], $_POST['prenoms'], $_POST['date_naissance'],
    $_POST['sexes_id'], $_POST['statuts_id'], $_POST['nom_prenoms_pere'], $_POST['nom_prenoms_mere'],
    $_POST['situations_matrimoniale_id'], $_POST['nombre_enfants'], $_POST['emploi_precedent'],
    $_POST['grades_id'], $_POST['fonction_actuelle'], $_POST['contact'],
    $_POST['email'],$_POST['photo']
];

// Données récupérées depuis un formulaire
$email = $_POST['email'];
$matricule_agent = $_POST['matricule_agent'];
$plain_password = "123456"; // Ce serait idéalement $_POST['password'] si récupéré depuis un formulaire

// Hachage sécurisé du mot de passe
$password_hash = password_hash($plain_password, PASSWORD_DEFAULT);

// Requête SQL pour insérer le nouvel utilisateur
$sql_insert_users = "INSERT INTO users (email, matricule_agent, password) VALUES (:email, :matricule_agent, :password_hash)";

// Préparation de la requête
$pdo_prepare_users = $pdo->prepare($sql_insert_users);

// Création d'un tableau associatif avec les données correctement mappées
$data_users = [
    'email' => $email,
    'matricule_agent' => $matricule_agent,
    'password_hash' => $password_hash
];

// Exécution de la requête avec le tableau de données
$pdo_prepare_users->execute($data_users);

// Exécution de la requête
try 
{
    $pdo_prepare_inscription->execute($data_inscription);
    $pdo_prepare_users->execute($data_users);
    echo "Insertion réussie.";
} catch (PDOException $e) {
    die("Erreur lors de l'insertion : " . $e->getMessage());
}

header("Location: confirm.php");
exit; // Assurez-vous de terminer le script après une redirection










?>
