<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion au compte</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        h1 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        input[type="email"],
        input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h1>Connexion au compte</h1>
    <form action="" method="POST">
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
        <label for="motdepasse">Mot de passe :</label>
        <input type="password" id="motdepasse" name="motdepasse" required>
        <input type="submit" name="creer" value="Connecter">
    </form>
</div>

<?php

session_start(); // Démarre la session
// 1) Connexion à la base de données

$serveur = "localhost";
$utilisateur = "root"; 
$mot_de_passe = ""; 
$base_de_donnees = "couture";
$connexion = mysqli_connect($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

// 2) Vérification de la connexion à la base de données
if (!$connexion) { 
    die("Échec de la connexion : " . mysqli_connect_error()); 
}

// 3) Vérification si des données ont été envoyées via la méthode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des valeurs des champs du formulaire
    $email = mysqli_real_escape_string($connexion, $_POST['email']);
    $motdepasse = mysqli_real_escape_string($connexion, $_POST['motdepasse']);

    // 4) Requête SQL pour vérifier l'existence de l'utilisateur dans la table de compte
    $sql = "SELECT * FROM compte WHERE email = '$email' AND mot_de_passe = '$motdepasse'";
    $resultat = mysqli_query($connexion, $sql);

    if (mysqli_num_rows($resultat) > 0) {
        // L'utilisateur existe

          // Stocke les informations de l'utilisateur dans les variables de session
          $_SESSION['email'] = $email;
      
        header("Location: index.php");
        exit();
    } else {
        // L'utilisateur n'existe pas
        echo "Erreur : Vous n'avez pas de compte.";
    }
} 

// 4) Fermeture de la connexion à la base de données
mysqli_close($connexion);
?>
</body>
</html>