<?php
  // Initialiser les variables qui sont en session et Charger la base de donnees
  session_start();
  require_once 'database_connection.php';
?>
<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Formulaire d'enregistrement</title>
    <link rel="stylesheet" href="login_style.css">
   </head>
<body>
  <div class="wrapper">
    <h2>CONNECTION</h2>

<?php echo $_SESSION['error_login']; ?>



  <form id="login_post" name="login_post" action="login_post.php" method="post">
    <div class="input-box">
        <input id='matricule_agent' name="matricule_agent" type="text" placeholder="Entrer votre matricule" required>
      </div>
      <div class="input-box">
        <input id='email' name="email" type="text" placeholder="Entrer votre maill" required>
      </div>
      <div class="input-box">
        <input id='password' name="password"  type="password" placeholder="Mot de pass" required>
      </div>

      
      <div class="policy">
        <input type="checkbox">
        <label class="form-check-label">
            &nbsp;
            &nbsp;
            &nbsp;
         <p>j'ai lu et j'accepte tous les terms & conditions</p> 
        </label>
      </div>
      <div class="input-box button">
        <input id='button_se_connecter' name="button_se_connecter" type="Submit" value="Se connecter">
      </div>
    </form>
  </div>

</body>
</html>

<?php
  // Vidage des valeur en session
  unset($_SESSION);
?>