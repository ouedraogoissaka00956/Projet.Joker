<?php 
$connexion = new PDO('mysql:host=localhost;dbname=projet', 'root', '');
$message = '';

if(isset($_POST['valider'])){
    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $email = htmlspecialchars($_POST['email']);
        $password = sha1($_POST['password']);
        $req = $connexion->prepare("SELECT * FROM utilisateur WHERE email = ? AND password = ?");
        $req->execute(array($email, $password));
        $cpt = $req->rowCount();

        if($cpt == 1){
            $message = "Compte bien trouvé";
        } else {
            $message = "Désolé, vous n'êtes pas enregistré";
        }
    } else {
        $message = "Veuillez remplir tous les champs";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="Acceuil.css">
    <link rel="stylesheet" href="Connexion.css">
    <link rel="stylesheet" href="Modesombre.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="Modesombre.js"></script>
    <script src="cachemotdepasse.js"></script>
</head>
<body>
    <header class="haut">
        <div class="logo">
            <img src="/Images/bitcoin_logo.png" alt="Bitcoin Logo">
            <span>BTC</span>
        </div>
        <div class="flag">
            <img src="/Images/burkina_faso_flag.png" alt="Burkina Faso Flag">
        </div>
        <button id="toggleDarkMode"><i class="fas fa-moon"></i></button>
    </header>
    <div class="acceuil">
        <a href="Acceuil.html" class="lien"><h1>Accueil</h1></a>
        <ul class="nav-links">
            <li><a href="Creationcompte.html" class="v">S'inscrire</a></li>
            <li><a href="#" class="v">Contactez-Nous</a></li>
        </ul>
    </div>
    <br><br>

    <div class="connexion">
        <form id="connexion" method="POST" action="">
           <div class="title">
            <h1 class="titre">Connexion</h1> <br>
           </div>
          <div class="formulaire">
          <label for="adresse">Adresse email</label> <br>
          <input type="email" name="email" id="email" placeholder="Veuillez entrer votre adresse email" size="20"> <br><br>

          <label for="password">Mot de passe </label> <br>
          <div class="password-container">
            <input type="password" name="password" id="password" placeholder="Veuillez entrer votre mot de passe" size="20">
            <i class="fas fa-eye-slash" id="togglePassword"></i>
        </div>
          <br><br>

          <input type="submit" name="valider" value="Connexion"> <br> <br>

          <a href="Motpasseoublie.html" class="forget">Mot de passe oublié ?</a>
          </div>
          <?php if (!empty($message)){
            echo "<p>$message</p>";
          }
         ?>
        </form>
    </div>
</body>
</html>
