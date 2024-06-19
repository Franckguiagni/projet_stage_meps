<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ministère de l'Emploi et de la Protection Sociale</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css"> <!-- Assurez-vous que le chemin est correct -->
    <style>
        body {
            padding-top: 80px; /* Ajoute de l'espace au-dessus du corps pour ne pas masquer le contenu sous la navbar */
        }

        .navbar-custom {
            background-color: #004d80; /* Couleur de fond plus sombre pour la barre de navigation */
        }

        .navbar-custom .navbar-brand, .navbar-custom .nav-link {
            color: white; /* Texte blanc pour un meilleur contraste */
            transition: color 0.3s ease-in-out; /* Adoucit la transition de couleur */
        }

        .navbar-custom .navbar-brand:hover, .navbar-custom .nav-link:hover {
            color: #ffcc00; /* Couleur jaune au survol pour attirer l'attention */
        }

        .bg-primary-custom {
            background-color: #0056b3; /* Une nuance plus profonde de bleu pour les éléments avec bg-primary */
        }

        .bg-primary-custom:hover {
            background-color: #004080; /* Couleur plus sombre au survol */
        }

        .rounded-custom {
            border-radius: 0.5rem; /* Arrondit les coins pour un look plus doux */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md fixed-top navbar-light navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <span class="bg-primary-custom bg-gradient p-2 rounded-custom text-light">Ministère l'emploi et de la protection sociale</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-bold" href="contact.html">
                            <span class="bg-primary-custom bg-gradient p-1 rounded-custom text-light">Contact</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-bold" href="login.php">
                            <span class="bg-primary-custom bg-gradient p-1 rounded-custom text-light">Se connecter</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-bold" href="inscription_liste.php">
                            <span class="bg-primary-custom bg-gradient p-1 rounded-custom text-light">Les inscrits</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
