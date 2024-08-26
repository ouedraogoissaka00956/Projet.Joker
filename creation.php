<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation de compte</title>
    <link rel="stylesheet" href="/Css/header.css">
    <link rel="stylesheet" href="/Css/Acceuil.css">
    <link rel="stylesheet" href="/Css/Creationcompte.css">
    <link rel="stylesheet" href="/Css/Modesombre.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="/JavaScript/Modesombre.js"></script>
    <script src=""></script>
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
        <a href="/Html/Acceuil.html" class="lien"><h1>Acceuil</h1></a>
        <ul class="nav-links">
            <li><a href="/Html/Connexion.html" class="v">Se Connecter</a></li>
            <li><a href="#" class="v">Contactez-Nous</a></li>
        </ul>
    </div>
    <br> <br>
    <div class="form1">
        <form>
        <?php
    // Connexion à la base de données (remplacez les valeurs par celles de votre configuration)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "siteweb";
    $port = "3306";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérification de la connexion
    if ($conn->connect_error) {
        die("La connexion a échoué : " . $conn->connect_error);
    }

    // Traitement du formulaire lorsqu'il est soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $email = $_POST["email"];
        $mot_de_passe = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hashage du mot de passe

        // Requête d'insertion des données dans la table "utilisateurs"
        $sql = "INSERT INTO king (nom, prenom, email, mot_de_passe) VALUES ('$nom', '$prenom', '$email', '$mot_de_passe')";

        if ($conn->query($sql) === TRUE) {
            echo "Compte créé avec succès !";
        } else {
            echo "Erreur lors de la création du compte : " . $conn->error;
        }
    }

    // Fermeture de la connexion
    $conn->close();
    ?>
            <div class="title"><h1>Création du compte</h1></div>
            <div class="form-group">
            <label for="username">Nom de l'utilisateur </label> <br>
            <input type="text" id="username" placeholder="Veuillez entrer votre nom d'utilisateur"><br><br>
            
            <label for="prenom">Prénom </label> <br>
            <input type="text" id="prenom" placeholder="Veuillez entrer votre prenom"><br><br>
            
            <label for="nationalite">Nationalité </label> <br>
            <select id="nationalite">
                <option value="">--Sélectionnez un pays--</option>
                <option value="AF">Afghanistan</option>
                <option value="AL">Albanie</option>
                <option value="DZ">Algérie</option>
                <option value="AS">Samoa américaines</option>
                <option value="AD">Andorre</option>
                <option value="AO">Angola</option>
                <option value="AI">Anguilla</option>
                <option value="AQ">Antarctique</option>
                <option value="AG">Antigua-et-Barbuda</option>
                <option value="AR">Argentine</option>
                <option value="AM">Arménie</option>
                <option value="AW">Aruba</option>
                <option value="AU">Australie</option>
                <option value="AT">Autriche</option>
                <option value="AZ">Azerbaïdjan</option>
                <option value="BS">Bahamas</option>
                <option value="BH">Bahreïn</option>
                <option value="BD">Bangladesh</option>
                <option value="BB">Barbade</option>
                <option value="BY">Biélorussie</option>
                <option value="BE">Belgique</option>
                <option value="BZ">Belize</option>
                <option value="BJ">Bénin</option>
                <option value="BM">Bermudes</option>
                <option value="BT">Bhoutan</option>
                <option value="BO">Bolivie</option>
                <option value="BQ">Bonaire, Saint-Eustache et Saba</option>
                <option value="BA">Bosnie-Herzégovine</option>
                <option value="BW">Botswana</option>
                <option value="BR">Brésil</option>
                <option value="BN">Brunei</option>
                <option value="BG">Bulgarie</option>
                <option value="BF">Burkina Faso</option>
                <option value="BI">Burundi</option>
                <option value="CV">Cap-Vert</option>
                <option value="KH">Cambodge</option>
                <option value="CM">Cameroun</option>
                <option value="CA">Canada</option>
                <option value="KY">Îles Caïmans</option>
                <option value="CF">République Centrafricaine</option>
                <option value="TD">Tchad</option>
                <option value="CL">Chili</option>
                <option value="CN">Chine</option>
                <option value="CX">Île Christmas</option>
                <option value="CC">Îles Cocos</option>
                <option value="CO">Colombie</option>
                <option value="KM">Comores</option>
                <option value="CD">République Démocratique du Congo</option>
                <option value="CG">République du Congo</option>
                <option value="CK">Îles Cook</option>
                <option value="CR">Costa Rica</option>
                <option value="HR">Croatie</option>
                <option value="CU">Cuba</option>
                <option value="CW">Curaçao</option>
                <option value="CY">Chypre</option>
                <option value="CZ">République tchèque</option>
                <option value="DK">Danemark</option>
                <option value="DJ">Djibouti</option>
                <option value="DM">Dominique</option>
                <option value="DO">République dominicaine</option>
                <option value="EC">Équateur</option>
                <option value="EG">Égypte</option>
                <option value="SV">El Salvador</option>
                <option value="GQ">Guinée équatoriale</option>
                <option value="ER">Érythrée</option>
                <option value="EE">Estonie</option>
                <option value="SZ">Eswatini</option>
                <option value="ET">Éthiopie</option>
                <option value="FJ">Fidji</option>
                <option value="FI">Finlande</option>
                <option value="FR">France</option>
                <option value="GA">Gabon</option>
                <option value="GM">Gambie</option>
                <option value="GE">Géorgie</option>
                <option value="DE">Allemagne</option>
                <option value="GH">Ghana</option>
                <option value="GI">Gibraltar</option>
                <option value="GR">Grèce</option>
                <option value="GL">Groenland</option>
                <option value="GD">Grenade</option>
                <option value="GP">Guadeloupe</option>
                <option value="GU">Guam</option>
                <option value="GT">Guatemala</option>
                <option value="GN">Guinée</option>
                <option value="GW">Guinée-Bissau</option>
                <option value="GY">Guyana</option>
                <option value="HT">Haïti</option>
                <option value="HN">Honduras</option>
                <option value="HK">Hong Kong</option>
                <option value="HU">Hongrie</option>
                <option value="IS">Islande</option>
                <option value="IN">Inde</option>
                <option value="ID">Indonésie</option>
                <option value="IR">Iran</option>
                <option value="IQ">Irak</option>
                <option value="IE">Irlande</option>
                <option value="IL">Israël</option>
                <option value="IT">Italie</option>
                <option value="JM">Jamaïque</option>
                <option value="JP">Japon</option>
                <option value="JE">Jersey</option>
                <option value="JO">Jordanie</option>
                <option value="KZ">Kazakhstan</option>
                <option value="KE">Kenya</option>
                <option value="KI">Kiribati</option>
                <option value="KP">Corée du Nord</option>
                <option value="KR">Corée du Sud</option>
                <option value="KW">Koweït</option>
                <option value="KG">Kirghizistan</option>
                <option value="LA">Laos</option>
                <option value="LV">Lettonie</option>
                <option value="LB">Liban</option>
                <option value="LS">Lesotho</option>
                <option value="LR">Libéria</option>
                <option value="LY">Libye</option>
                <option value="LI">Liechtenstein</option>
                <option value="LT">Lituanie</option>
                <option value="LU">Luxembourg</option>
                <option value="MO">Macao</option>
                <option value="MG">Madagascar</option>
                <option value="MW">Malawi</option>
                <option value="MY">Malaisie</option>
                <option value="MV">Maldives</option>
                <option value="ML">Mali</option>
                <option value="MT">Malte</option>
                <option value="MH">Îles Marshall</option>
                <option value="MQ">Martinique</option>
                <option value="MR">Mauritanie</option>
                <option value="MU">Maurice</option>
                <option value="YT">Mayotte</option>
                <option value="MX">Mexique</option>
                <option value="FM">Micronésie</option>
                <option value="MD">Moldavie</option>
                <option value="MC">Monaco</option>
                <option value="MN">Mongolie</option>
                <option value="ME">Monténégro</option>
                <option value="MA">Maroc</option>
                <option value="MZ">Mozambique</option>
                <option value="MM">Birmanie</option>
                <option value="NA">Namibie</option>
                <option value="NR">Nauru</option>
                <option value="NP">Népal</option>
                <option value="NL">Pays-Bas</option>
                <option value="NZ">Nouvelle-Zélande</option>
                <option value="NI">Nicaragua</option>
                <option value="NE">Niger</option>
                <option value="NG">Nigéria</option>
                <option value="NU">Niue</option>
                <option value="NF">Îles Norfolk</option>
                <option value="MP">Îles Mariannes du Nord</option>
                <option value="NO">Norvège</option>
                <option value="OM">Oman</option>
                <option value="PK">Pakistan</option>
                <option value="PW">Palaos</option>
                <option value="PS">Palestine</option>
                <option value="PA">Panama</option>
                <option value="PG">Papouasie-Nouvelle-Guinée</option>
                <option value="PY">Paraguay</option>
                <option value="PE">Pérou</option>
                <option value="PH">Philippines</option>
                <option value="PL">Pologne</option>
                <option value="PT">Portugal</option>
                <option value="PR">Porto Rico</option>
                <option value="QA">Qatar</option>
                <option value="RE">Réunion</option>
                <option value="RO">Roumanie</option>
                <option value="RU">Russie</option>
                <option value="RW">Rwanda</option>
                <option value="BL">Saint-Barthélemy</option>
                <option value="SH">Sainte-Hélène</option>
                <option value="KN">Saint-Kitts-et-Nevis</option>
                <option value="LC">Sainte-Lucie</option>
                <option value="MF">Saint-Martin</option>
                <option value="PM">Saint-Pierre-et-Miquelon</option>
                <option value="VC">Saint-Vincent-et-les-Grenadines</option>
                <option value="WS">Samoa</option>
                <option value="SM">Saint-Marin</option>
                <option value="ST">Sao Tomé-et-Principe</option>
                <option value="SN">Sénégal</option>
                <option value="RS">Serbie</option>
                <option value="SC">Seychelles</option>
                <option value="SL">Sierra Leone</option>
                <option value="SG">Singapour</option>
                <option value="SX">Sint Maarten</option>
                <option value="SK">Slovaquie</option>
                <option value="SI">Slovénie</option>
                <option value="SB">Îles Salomon</option>
                <option value="SO">Somalie</option>
                <option value="ZA">Afrique du Sud</option>
                <option value="GS">Géorgie du Sud</option>
                <option value="SS">Soudan du Sud</option>
                <option value="ES">Espagne</option>
                <option value="LK">Sri Lanka</option>
                <option value="SD">Soudan</option>
                <option value="SR">Suriname</option>
                <option value="SZ">Eswatini</option>
                <option value="SE">Suède</option>
                <option value="CH">Suisse</option>
                <option value="SY">Syrie</option>
                <option value="TW">Taïwan</option>
                <option value="TJ">Tadjikistan</option>
                <option value="TZ">Tanzanie</option>
                <option value="TH">Thaïlande</option>
                <option value="TL">Timor oriental</option>
                <option value="TG">Togo</option>
                <option value="TK">Tokelau</option>
                <option value="TO">Tonga</option>
                <option value="TT">Trinité-et-Tobago</option>
                <option value="TN">Tunisie</option>
                <option value="TR">Turquie</option>
                <option value="TM">Turkménistan</option>
                <option value="TC">Îles Turks-et-Caïques</option>
                <option value="TV">Tuvalu</option>
                <option value="UG">Ouganda</option>
                <option value="UA">Ukraine</option>
                <option value="AE">Émirats Arabes Unis</option>
                <option value="GB">Royaume-Uni</option>
                <option value="US">États-Unis</option>
                <option value="UY">Uruguay</option>
                <option value="UZ">Ouzbékistan</option>
                <option value="VU">Vanuatu</option>
                <option value="VE">Venezuela</option>
                <option value="VN">Viêt Nam</option>
                <option value="WF">Wallis-et-Futuna</option>
                <option value="EH">Sahara occidental</option>
                <option value="YE">Yémen</option>
                <option value="ZM">Zambie</option>
                <option value="ZW">Zimbabwe</option>
            </select><br><br>
            
            <label for="email">Adresse email </label> <br>
            <input type="email" id="email" placeholder="Veuillez entrer votre adresse email"><br><br>
            
            <label for="password">Mot de passe (8 caractères) </label> <br>
            <input type="password" id="password" placeholder="Veuillez entrer votre mot de passe"><br><br>
            <label for="password">Confirmation du mot de passe</label> <br>
            <input type="password" id="password" placeholder="Veuillez confirmer votre mot de passe"><br><br>
            
            <input type="checkbox" id="newsletter" class="choix">
            <label for="newsletter">Recevoir un message par mail</label><br><br>
            <button type="submit">Créer mon compte</button>
            </div>
        </form>

        </div>

    
</body>
</html>