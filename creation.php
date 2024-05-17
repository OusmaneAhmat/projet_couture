
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        h1{
            text-align: center;
            text-decoration: underline;
        }
        /* Style du formulaire d'inscription */
form {
    max-width: 400px; /* Largeur maximale du formulaire */
    margin: 0 auto; /* Centrer le formulaire horizontalement */
    padding: 20px; /* Ajouter de l'espace intérieur */
    background-color: #f2f2f2; /* Couleur de fond */
    border-radius: 10px; /* Coins arrondis */
}

/* Style des champs de saisie */
input[type="text"],
input[type="email"],
input[type="password"] {
    width: 100%; /* Largeur du champ de saisie */
    padding: 10px; /* Ajouter de l'espace intérieur */
    margin: 10px 0; /* Ajouter de l'espace autour du champ */
    border: 1px solid #ccc; /* Bordure */
    border-radius: 5px; /* Coins arrondis */
}

/* Style du bouton */
button[type="submit"] {
    width: 100%; /* Largeur du bouton */
    background-color: #4CAF50; /* Couleur de fond */
    color: white; /* Couleur du texte */
    padding: 10px; /* Ajouter de l'espace intérieur */
    margin: 10px 0; /* Ajouter de l'espace autour du bouton */
    border: none; /* Supprimer la bordure */
    border-radius: 5px; /* Coins arrondis */
    cursor: pointer; /* Curseur en pointeur au survol */
}

/* Effet au survol du bouton */
button[type="submit"]:hover {
    background-color: #45a049;
}

/* Style du placeholder */
::placeholder {
    color: #999; /* Couleur du texte du placeholder */
}

    </style>
    <title>S'inscrire</title>
</head>
<body>
<main class="container">

<!-- // 3)titre de la page  -->
<h1>Création de compte utilisateur</h1>

<!-- // 4) formulaire de creation de compte  -->
    <form action="" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
        <br><br>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        <label for="motdepasse">Mot de passe :</label>
        <input type="password" id="motdepasse" name="motdepasse" required>
        <br><br>
        <input type="submit"  name="creer" value="Créer">
    </form>


<!-- // 2) fin des balises html  -->
</main>
<?php
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "couture";

// Connexion à la base de données
$connexion = mysqli_connect($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);
if (!$connexion) {
    die("Échec de la connexion : " . mysqli_connect_error());
}

// Vérification de la validation du formulaire
if (isset($_POST['creer'])) {
    // Échapper les valeurs pour prévenir les injections SQL
    $nom = mysqli_real_escape_string($connexion, $_POST['nom']);
    $email = mysqli_real_escape_string($connexion, $_POST['email']);
    $motdepasse = mysqli_real_escape_string($connexion, $_POST['motdepasse']);

    // Vérification si l'email existe déjà dans la base de données
    $sql_verification = "SELECT * FROM compte WHERE email = '$email'";
    $resultats_verification = mysqli_query($connexion, $sql_verification);

    if (mysqli_num_rows($resultats_verification) > 0) {
        // L'email existe déjà
        echo "Erreur : Un compte avec cet email existe déjà.";
    } else {
        // Requête d'insertion dans la table compte
        $sql_insertion = "INSERT INTO compte (nom, email, mot_de_passe) VALUES ('$nom', '$email', '$motdepasse')";
        if (mysqli_query($connexion, $sql_insertion)) {
            // Redirection vers la page de connexion
            header("Location: connexion.php");
            exit();
        } else {
            echo "Erreur : " . mysqli_error($connexion);
        }
    }
}

// Fermeture de la connexion à la base de données
mysqli_close($connexion);
?>

</body>
</html>