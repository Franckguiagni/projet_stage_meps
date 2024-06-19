<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'enregistrement des agents</title>
    <!-- Intégrez les liens vers les fichiers CSS et JS de Bootstrap ici -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Styles personnalisés pour le formulaire -->
    <style>
        /* Exemple de style pour les champs de formulaire */
        #registration-form label {
            display: block;
            margin-bottom: 10px;
        }

        #registration-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #registration-form button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <form id="registration-form">
            <label for="agent-name">Nom de l'agent :</label>
            <input type="text" id="agent-name" name="agent-name" required>

            <label for="agent-email">Adresse e-mail :</label>
            <input type="email" id="agent-email" name="agent-email" required>
            <form id="registration-form" style="text-align:center;">
                <div class="row">
                  <div class="col-md-5" style="text-align: left;">
                  <img src="ImageStage\th2.jpg" alt="photo">
                  </div>
                  <div class="col-md-7" style="text-align: right;">
                  <img src="ImageStage\OIP 2.jpg" alt="photo">
                  </div>
                </div>
                          <div class="row">
                              <div class="col-md-12">
                              <br>
                              <br>
                                  <h1 style="text-align: center;">FORMULAIRE D'ENREGISTREMENT DU PERSONNEL<br><h2 style="text-align: center;"> MINISTERE DE L'EMPLOI ET DE LA PROTECTION SOCIALE</h2>
                              <br>
                              <br>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-3">
                                  <b>Matricule Agent</b>
                                  <br>
                                  <br>
                                  <b>NOM</b>
                                  <br>
                                  <br>
                                  <b>PRENOM</b>
                                  <br>
                                  <br>
                                  <b>Date Naissance</b>
                              </div>
                              <div class="col-md-9">
                                  <input type="text">
                                  <br>
                                  <br>
                                  <input type="text">
                                  <br>
                                  <br>
                                  <input type="text">
                                  <br>
                                  <br>
                                  <input type="nuber">
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-3">
                              <b>Sexe</b>
                              <br>
                              <br> 
                              <b>Statut</b>
                              <br>
                              <br> 
                              <b>NOM DU PERE</b>
                              <br>
                              <br>
                              <b>NOM DE LA MERE</b>
                              <br>
                              <br>
                          </div>
                          <div class="col-md-9">
                            <input type="radio"  id="Femme" name="sexe" value="Femme">
                            <label for="Femme">Femme</label>
                            <input type="radio"  id="homme" name="sexe" value="Homme">
                            <label for="Homme">Homme</label>
                            <br>
                            <br>
                            <input type="radio"  id="Fonctionnaire" name="statut" value="Fonctionnaire">
                            <label for="Fonctionnaire">Fonctionnaire</label>
                            <input type="radio"  id="contractuel" name="statut" value="contractuel">
                            <label for="contractuel">contractuel</label>
                            <br> 
                            <br>
                            <input type="text">
                            <br>
                            <br>
                            <input type="text">
                          </div>
                          <div class="row">
                              <div class="col-md-3">
                              <b>SITUATION MATRIMONIALE</b>
                              <br>
                              <br>
                              <b>NOMBRE D'ENFANTS</b>
                              <br>
                              <br>
                              <b>Emploi anterieur</b>
                              <br>
                              <br>
                              <b>Grade</b>
                              <br>
                              <br>
                          </div>
                          <div class="col-md-9">
                              <select id="ETAT MATRIMONIAL" name="ETAT MATRIMONIAL">
                                  <optgroup>
                                      <option value="celibataire">celibataire</option>
                                      <option value="marier">marier</option>
                                      <option value="divorcer">divorcer</option>
                                  </optgroup>
                              </select>
                              <br>
                              <br>
                              <input type="nuber">
                              <br>
                              <br>
                              <input type="nuber">
                              <br>
                              <br>
                              <input type="nuber">
                          </div>
                          <div class="row">
                              <div class="col-md-3">
                              <b>Fonction actuelle</b>
                              <br>
                              <br>
                              <b>Adresse personnelle</b>
                              <br>
                              <br>
                              <b>Email:</b>
                              <br>
                              <br>
                          </div>
                          <div class="col-md-9">
                          <input type="nuber">
                              </br>
                              <br>
                              <select id="Telephone" name="Telephone">
                                  <optgroup>
                                    <option value="BUR">BUR</option>
                                    <option value="DOM">DOM</option>
                                    <option value="CELL">CELL</option>
                                  </optgroup>
                              </select>
                                  &nbsp; 
                                  <input type="nuber">
                              <br>
                              <br>
                              <input type="email" placeholder="xxxxx@gmail.com">
                          </div>
                          <div class="row"  >
                              <div class="col-md-12">
                                  <div class="card">
                                      <div class="top">
                                          <button type="button">Upload</button>
                                      </div>
                                      <div class="drag-area" >
                                          <span class="visible">
                                          TELECHARGER</span>
                                          <span class="select" role="button">Deposer ici...!!!</span>
                                          <span class="on-drop">Drop images here</span>
                                          <input name="file" type="file" class="file" multiple  />
                                      </div>
                                  </div>
                              </div>
                              <br>
                              <br>
                              <div class="c100" id="submit">
                              <br>
                                  <input type="submit" value="ENVOYER">
                              </div>
                          </div>
              </form>
            <label for="agent-password">Mot de passe :</label>
            <input type="password" id="agent-password" name="agent-password" required>

            <!-- Ajoutez d'autres champs ici (par exemple, téléphone, adresse, etc.) -->

            <button type="submit">Enregistrer</button>
        </form>
    </div>
</body>
</html>
