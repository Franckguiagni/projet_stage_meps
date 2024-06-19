<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <title>Renseignement du personnel</title>
<link rel="stylesheet" href="liste_inscrit.css">
</*link rel="stylesheet" href="login_style.css"/*/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Romanesco&family=Rubik+Scribble&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>
</head>
<body>
<?php include 'database.php'; ?>

<div class="container mt-5">
    <h2>Listes des Inscrits</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Matricule</th>
                <th>Nom</th>
                <th>Prénoms</th>
                <th>Date de Naissance</th>
                <th>Sexe</th>
                <th>Statut</th>
                <th>Nom du Père</th>
                <th>Nom de la Mère</th>
                <th>Situation Matrimoniale</th>
                <th>Nombre d'Enfants</th>
                <th>Emploi Précédent</th>
                <th>Grade</th>
                <th>Fonction Actuelle</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Photo</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($inscriptions as $inscription): ?>
            <tr>
               <td><?= htmlspecialchars($inscription['matricule']) ?></td>
                <td><?= htmlspecialchars($inscription['nom']) ?></td>
                <td><?= htmlspecialchars($inscription['prenoms']) ?></td>
                <td><?= htmlspecialchars($inscription['date_naissance']) ?></td>
                <td><?= htmlspecialchars($inscription['sexes_id']) ?></td>
                <td><?= htmlspecialchars($inscription['statuts_id']) ?></td>
                <td><?= htmlspecialchars($inscription['nom_prenoms_pere']) ?></td>
                <td><?= htmlspecialchars($inscription['nom_prenoms_mere']) ?></td>
                <td><?= htmlspecialchars($inscription['situations_matrimoniale_id']) ?></td>
                <td><?= htmlspecialchars($inscription['nombre_enfants']) ?></td>
                <td><?= htmlspecialchars($inscription['emploi_precedent']) ?></td>
                <td><?= htmlspecialchars($inscription['grade_id']) ?></td>
                <td><?= htmlspecialchars($inscription['fonction_actuelle']) ?></td>
                <td><?= htmlspecialchars($inscription['contact']) ?></td>
                <td><?= htmlspecialchars($inscription['email']) ?></td>
                <td><img src="<?= htmlspecialchars($inscription['photo']) ?>" alt="Photo" style="width: 100px; height: auto;"></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</body>
</html>
