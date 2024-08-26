<?php

    //Connexion à la base de donnees
     $servername = "localhost"; // Adresse du serveur MySQL
     $username = "root"; // Nom d'utilisateur MySQL
     $password = ""; // Mot de passe MySQL
     $dbname = "projet"; // Nom de la base de donnees

    // Créer une connexion à la base de donnees
     $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion à la base de donnees
     if ($conn->connect_error) {
         die("Échec de la connexion: " . $conn->connect_error);
     }

    //Récupération des donnees du formulaire
     $username = $_POST['username'];
     $prenom = $_POST['prenom'];
     $nationalite = $_POST['nationalite'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $newsletter = isset($_POST['newsletter']) ? 1 : 0; // Vérifie si la case à cocher est cochée

    //Insertion des donnees
 //    $stmt = $conn->prepare("INSERT INTO personne (username, prenom, nationalite, email, password, newsletter) VALUES (?, ?, ?, ?, ?, ?)");
//     $stmt->bind_param("sssssi", $username, $prenom, $nationalite, $email, $password, $newsletter);

    //Exécution de la requête
    //  if ($conn->execute()) {
         //Envoie une alerte si le compte est bien cree
    //    echo "<script>alert('votre compte a ete cree avec succes !'); window.location.href='Connexion.html';</script>";
    //  } 
    // else {
         // Envoie une erreur
        /*echo "<script>alert('Desole l'adresse mail entre a ete deja utilise " . $stmt->error . "'); window.location.href='Creationcompte';</script>";*/
      //  echo "Erreur".$conn->error;
    //  }

    $sql = "INSERT INTO personne (username, prenom, nationalite, email, password, newsletter) VALUES ('$username', '$prenom', '$nationalite', '$email' , '$password', '$newsletter')";

        if ($conn->query($sql) === TRUE) {
            echo "Compte créé avec succès !";
        } else {
            echo "Erreur lors de la création du compte : " . $conn->error;
        }

    //Fermerture de la connexion
 //    $stmt->close();
     $conn->close();

?>
