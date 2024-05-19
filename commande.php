<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <title>Formulaire de commande</title>
    <style>
 body{
    background-color: #f0cac6;
    font-family: "Archivo Narrow", sans-serif;
  font-optical-sizing: auto;
  font-style: normal;
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
}
header{
  
    /* background-color:#E7B9C2; */
    /* background-color:#A6C8E8 */
     background-color:#FF6F61 ;
            padding: 25px;
            text-align: center;
            color: white;
}
nav {
    text-align: center;
    background-color: #6c2e28;
    padding: 20px 0;
}
nav a {
    color: white;
    font-size: 18px;
    margin: 0 15px;
    text-decoration: none;
    font-size: 30px;
    font-family: "Montserrat Alternates", sans-serif;
    font-weight: 100;
    font-style: normal;
    
}
nav a:hover {
    color: lawngreen;
    text-decoration: underline;
} 

       
    </style>
</head>
<body>
<nav>
        <a href="index.php">Accueil</a>
        <a href="propos.html">A propos</a>
        <a href="contact.html">Contact</a>
    </nav>


    <?php
$serveur = "localhost";
$utilisateur = "root"; 
$mot_de_passe = ""; 
$base_de_donnees = "couture";
$connexion = mysqli_connect($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);
if (!$connexion) { 
    die("Échec de la connexion : " . mysqli_connect_error()); 
} 

// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $objet = $_POST['objet'];
    $reference = $_POST['reference'];
    $adresse = $_POST['adresse'];
    $quantite = $_POST['quantite'];
    $instructions = $_POST['instructions'];

    // Insérer les données dans la base de données
    $sql = "INSERT INTO commande (nom, prenom, email, telephone, objet, reference, adresse, quantite, instructions)
            VALUES ('$nom', '$prenom', '$email', '$telephone', '$objet', '$reference', '$adresse', '$quantite', '$instructions')";
    if (mysqli_query($connexion, $sql)) {
        echo "Formulaire soumis avec succès !";
    } else {
        echo "Erreur lors de l'insertion dans la base de données : " . mysqli_error($connexion);
    }
}
?>

<form action="" method="POST">
    <h1>Formulaire de commande</h1>

    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required>

    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required>

    <label for="telephone">Téléphone :</label>
    <input type="tel" id="telephone" name="telephone" required>

    <label for="objet">Objet/Commande :</label>
    <input type="text" id="objet" name="objet" required>

    <label for="reference">Référence :</label>
    <input type="text" id="reference" name="reference" required>

    <label for="adresse">Adresse de livraison :</label>
    <input type="text" id="adresse" name="adresse" required>

    <label for="quantite">Quantité :</label>
    <input type="number" id="quantite" name="quantite" required>

    <label for="instructions">Instructions spéciales :</label>
    <textarea id="instructions" name="instructions" rows="4" cols="50"></textarea>

    <input type="submit" value="Envoyer la commande">
</form>

</body>
</html>
