


<?php
// Paramètres de connexion à la base de données
$host = 'localhost';  // ou l'adresse du serveur de la base de données
$dbname = 'stage_meps_';
$username = 'root';
$password = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

// Assuming $pdo is the PDO connection object
try {
    // Prepare SQL query with explicit fields and unambiguous column names
    $requete1="
    SELECT 
    ins.id,
    ins.matricule_agent,
    ins.nom,
    ins.prenoms,
    ins.date_naissance,
    ins.sexes_id,
    ins.statuts_id,
    ins.grades_id,
    ins.nom_prenoms_pere,
    ins.nom_prenoms_mere,
    ins.situations_matrimoniale_id,
    ins.nombre_enfants,
    ins.emploi_precedent,
    ins.fonction_actuelle,
    ins.contact,
    ins.email,
    ins.photo,

    sex.id AS sex_id,
    sex.nom AS sex_nom,

    stat.id AS statut_id,
    stat.nom AS statut_nom,

    grad.id AS grade_id,
    grad.nom AS grade_nom,

    smat.id AS smat_id,
    smat.nom AS smat_nom

FROM 
    inscription AS ins
INNER JOIN 
    sexes AS sex ON ins.sexes_id = sex.id
INNER JOIN 
    statuts AS stat ON ins.statuts_id = stat.id
INNER JOIN 
    grades AS grad ON ins.grades_id = grad.id
INNER JOIN 
    situations_matrimoniale AS smat ON ins.situations_matrimoniale_id = smat.id  ORDER BY ins.id LIMIT 1";


    // Prepare and execute the query
    $stmt = $pdo->prepare($requete1);
    $stmt->execute();

    // Fetch the result
    $inscription = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check and display the result
    if ($inscription) {
        // echo "Latest Inscription Details:<br>";
        // echo "ID: " . htmlspecialchars($result['id']) . "<br>";
        // echo "Name: " . htmlspecialchars($result['nom']) . "<br>";
        // echo "Date of Birth: " . htmlspecialchars($result['date_naissance']) . "<br>";
        // echo "Sex: " . htmlspecialchars($result['sex_name']) . "<br>";
    } else {
        echo "No results found.";
    }
} catch (PDOException $e) {
    // Handle SQL errors or connection failures
    echo "Error: " . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <title>Renseignement du personnel</title>
    <!-- Suppression des balises link commentées et correction -->
    <link href="https://fonts.googleapis.com/css2?family=Romanesco&family=Rubik+Scribble&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container mt-5">
        <h3>Inscrits :</h3>
        <p>
            NOM : <?php echo htmlspecialchars($inscription['nom']); ?><br>
            PRÉNOMS : <?php echo htmlspecialchars($inscription['prenoms']); ?><br>
            DATE DE NAISSANCE : <?php echo htmlspecialchars($inscription['date_naissance']); ?><br>
            SEXE : <?php echo htmlspecialchars($inscription['sex_nom']); ?><br>
            STATUT : <?php echo htmlspecialchars($inscription['statut_nom']); ?><br>
            NOM DU PÈRE : <?php echo htmlspecialchars($inscription['nom_prenoms_pere']); ?><br>
            NOM DE LA MÈRE : <?php echo htmlspecialchars($inscription['nom_prenoms_mere']); ?><br>
            NOMBRE D'ENFANTS : <?php echo htmlspecialchars($inscription['nombre_enfants']); ?><br>
            EMPLOI PRÉCÉDENT : <?php echo htmlspecialchars($inscription['emploi_precedent']); ?><br>
            GRADE : <?php echo htmlspecialchars($inscription['grade_nom']); ?><br>
            FONCTION ACTUELLE : <?php echo htmlspecialchars($inscription['fonction_actuelle']); ?><br>
            CONTACT : <?php echo htmlspecialchars($inscription['contact']); ?><br>
            EMAIL : <?php echo htmlspecialchars($inscription['email']); ?><br>
            PHOTO : <img src="uploads/<?php echo htmlspecialchars($inscription['photo']); ?>" alt="Photo de profil" class="img-fluid">
        </p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
