<?php
$serveur = "localhost";
$utilisateur = "root"; 
$mot_de_passe = ""; 
$base_de_donnees = "couture";
// connexion avec la base de donnée
$connexion = mysqli_connect($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);
if (!$connexion) { 
    die("Échec de la connexion : " . mysqli_connect_error()); 
} 

// print_r($_POST);
// 6) verification de la validation du formulaire
if (isset($_POST['creer'])) {
  

    // 7) requete d'insertion dans la table compte
    $sql = "INSERT INTO compte (nom, email, mot_de_passe) VALUES ('{$_POST['nom']}', '{$_POST['email']}', '{$_POST['motdepasse']}')";
    $resultats = mysqli_query($connexion, $sql); 

    // 8) Redirection vers la page de connexion
    header("Location: connexion.php");

}

    
?>