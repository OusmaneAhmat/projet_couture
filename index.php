<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="atelier de couture">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="reset.css"> -->
    <link rel="stylesheet" href="style.css">
    <title>Acceuil</title>
</head>
<body>
        <header>
             <h1>ATELIER DE COUTURE</h1>
             <p>Bienvenue sur notre boutique en ligne de vêtements</p>
        </header>    
        <nav>
            <a href="index.php">Acceuil</a>
            <a href="produit.html">Produit</a>
            <a href="propos.html">A propos</a>
            <a href="contact.html">Contact</a>
        </nav>
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
    <footer>
        <div>
            🗂️Page: Centre culturel
            🏠N'Djamena, Chad
            📞+235 66 06 90 06
            📩aleycentre@gmail.com
            💻Cours en ligne · Cours en personne
            </div> 
    </footer>
</body>
</html>