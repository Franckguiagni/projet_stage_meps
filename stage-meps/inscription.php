<!DOCTYPE html>
<link>
    <link>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FORMULAIRE D'INSCRIPTION</title>
<link rel="stylesheet" href="app.css">  <!-- Assurez-vous que ce chemin est correct -->
<link rel="stylesheet" href="stylle.css">
</*link rel="stylesheet" href="form_style.css"/>
    
</*link rel="stylesheet" href="login_style.css"/*/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Lobster&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Romanesco&family=Rubik+Scribble&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>

    <style>
        /*.form-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .form-container > div {
            flex: 1;
        }
        body {
            font-family: Arial, sans-serif;
        }
        .upload-area {
            border: 2px dashed #ccc;
            border-radius: 10px;
            position: relative;
            width: 300px;
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            margin: 20px;
            cursor: pointer;
            transition: border .3s ease-in-out;
        }
        .upload-area:hover {
            border-color: #666;
        }
        .upload-area input[type='file'] {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0;


            cursor: pointer;
        }
        .upload-icon {
            font-size: 30px;
            color: #ccc;
        }
        .upload-instructions {
            font-size: 16px;
            color: #ccc;
        }
        .file-preview {
            max-width: 100%;
            max-height: 100%;
            border-radius: 10px;
            display: none;
        }*/
    </style>
   
   <script>
        function previewImage() {
            const file = document.getElementById('photo').files[0];
            const preview = document.getElementById('file-preview');
            const reader = new FileReader();
            
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
                document.querySelector('.upload-icon').style.display = 'none';
                document.querySelector('.upload-instructions').style.display = 'none';
            };
            
            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
<?php

include 'header.php';
?>

</head>
<body>
  <div class="wrapper">
<h1>INSCRIPTION</h1>
    <div class="container mt-4">
        <form id="inscription_post_" name="inscription_post_" action="inscription_post.php" method="post">
            <!-- Matricule de l'agent -->
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="matricule_agent" class="form-label">Matricule de l'agent:</label>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="matricule_agent" name="matricule_agent" required>
                </div>
            </div>

            <!-- Nom -->
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="nom" class="form-label">Nom:</label>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="nom" name="nom" required>
                </div>
            </div>

            <!-- Prénoms -->
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="prenoms" class="form-label">Prénoms:</label>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="prenoms" name="prenoms" required>
                </div>
            </div>

            <!-- Date de naissance -->
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="date_naissance" class="form-label">Date de naissance:</label>
                </div>
                <div class="col-md-8">
                    <input type="date" class="form-control" id="date_naissance" name="date_naissance" required>
                </div>
            </div>

            <!-- Sexe -->
            <div class="row mb-3">
                <div class="col-md-4">
                    <label class="form-label">Sexe:</label>
                </div>
                <div class="col-md-8">
                <select class="form-control" id="sexes_id" name="sexes_id" required>
                        <option value="1">Homme</option>
                        <option value="2">Femme</option>
                    </select>
                </div>
            </div>

            <!-- Statut -->
            <div class="row mb-3">
                <div class="col-md-4">
                    <label class="form-label">Statut:</label>
                </div>
                <div class="col-md-8">
                <select class="form-control" id="statuts_id" name="statuts_id" required>
                        <option value="1">Fonctionnaire</option>
                        <option value="2">Contractuel</option>
                    </select>
                </div>
            </div>

            <!-- Ajouter les autres champs en suivant le même modèle -->
            <div class="row mb-3">
                <div class="col-md-4"><label for="nom_pere" class="form-label">Nom du père:</label></div>
                <div class="col-md-8"><input type="text" class="form-control" id="nom_prenoms_pere" name="nom_prenoms_pere"></div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4"><label for="nom_mere" class="form-label">Nom de la mère:</label></div>
                <div class="col-md-8"><input type="text" class="form-control" id="nom_prenoms_mere" name="nom_prenoms_mere"></div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4"><label for="situation_matrimoniale" class="form-label">Situation matrimoniale:</label></div>
                <div class="col-md-8">
                    <select class="form-control" id="situations_matrimoniale_id" name="situations_matrimoniale_id" required>
                        <option value="1">Célibataire</option>
                        <option value="2">Marié(e)</option>
                        <option value="3">Divorcé(e)</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4"><label for="nombre_enfants" class="form-label">Nombre d'enfants:</label></div>
                <div class="col-md-8"><input type="number" class="form-control" id="nombre_enfants" name="nombre_enfants" min="0"></div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4"><label for="emploi_precedent" class="form-label">Emploi précédent:</label></div>
                <div class="col-md-8"><input type="text" class="form-control" id="emploi_precedent" name="emploi_precedent"></div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4"><label for="grades_id" class="form-label">Grade:</label></div>
                <div class="col-md-8">
                    <select class="form-control" id="grades_id" name="grades_id" required>
                        <option value="1">Grade A7</option>
                        <option value="2">Grade A6</option>
                        <option value="3">Grade A5</option>
                        <option value="4">Grade A4</option>
                        <option value="5">Grade A3</option>
                        <option value="6">Grade A2</option>
                        <option value="7">Grade A1</option>
                        <option value="8">Grade B1</option>
                        <option value="9">Grade B2</option>
                        <option value="10">Grade C1</option>
                        <option value="11">Grade C2</option>
                        <option value="12">Grade C3</option>
                        <option value="13">Grade D1</option>
                        <option value="14">Grade D2</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4"><label for="fonction_actuelle" class="form-label">Fonction actuelle:</label></div>
                <div class="col-md-8"><input type="text" class="form-control" id="fonction_actuelle" name="fonction_actuelle" required></div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4"><label for="contact" class="form-label">Contact:</label></div>
                <div class="col-md-8"><input type="tel" class="form-control" id="contact" name="contact" pattern="[0-9]{10}" placeholder="10 chiffres sans espace" required></div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4"><label for="email" class="form-label">Email:</label></div>
                <div class="col-md-8"><input type="email" class="form-control" id="email" name="email" required></div>
            </div>

            <!-- Zone de téléchargement -->
            <div class="row mb-3">
                <div class="col-12">
                    <div class="upload-area" id="upload-file-container">
                        <i class="fas fa-cloud-upload-alt upload-icon"></i>
                        <span class="upload-instructions">Cliquez ou déposez un fichier pour télécharger</span>
                        <input type="file" id="photo" name="photo" accept="image/*" onchange="previewImage();">
                        <img id="file-preview" class="file-preview" />
                    </div>
                </div>
            </div

            <!-- Bouton Soumettre -->
            <div class="row mb-3">
            <?php
            include 'envoi.php';
            ?>
            </div>
        </form>
    </div>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
