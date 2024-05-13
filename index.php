<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="atelier de couture">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="reset.css"> -->
    <link rel="stylesheet" href="style.css">
    <title>Acceuil</title>
</head>
<body>
<main>
        <header>
            <nav><a href="index.php">Acceuil</a></nav>
            <nav><a href="produit.html">Produit</a></nav>
            <nav><a href="propos.html">A propos</a></nav>
            <nav><a href="contact.html">Contact</a></nav>
        </header>    
    </main>
    <h1>ATELIER DE COUTURE</h1>
    <div class="videos-container">
    <?php 
$serveur = "localhost";
$utilisateur = "root"; 
$mot_de_passe = ""; 
$base_de_donnees = "couture";
$connexion = mysqli_connect($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

if (!$connexion) { 
    die("Échec de la connexion : " . mysqli_connect_error()); 
} else { 
    echo "Connexion réussie à la base de données.";
}

$sql = "SELECT * FROM video";
$resultats = mysqli_query($connexion, $sql);

if($resultats){
    if(mysqli_num_rows($resultats) > 0) {
        $videos = mysqli_fetch_all($resultats, MYSQLI_ASSOC);
        foreach ($videos as $video) {
            // Faire quelque chose avec chaque ligne de résultat
            // Par exemple, afficher le lien de la vidéo :
            echo '<video controls width="250">
                    <source src="' . $video['url'] . '" type="video/mp4" />
                  </video><br>';
        }
    } else {
        echo "Aucun résultat trouvé";
    }
} else {
    echo "Erreur : " . mysqli_error($connexion); 
}

mysqli_close($connexion);
?>

</div>
</body>
</html>