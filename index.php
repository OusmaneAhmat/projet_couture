<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="atelier de couture">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Acceuil</title>
</head>
<body>
    <header class="tete">
        <h1>ATELIER DE COUTURE</h1>
        <p>Bienvenue sur notre boutique en ligne de vêtements</p>
    </header>    
    <nav>
        <a href="index.php">Acceuil</a>
        <a href="propos.html">A propos</a>
        <a href="contact.html">Contact</a>
    </nav>
    <div class="container">
        <div class="image">
            <a href="./detail/detail1.html"><img src="./images/djezz2.jpg" alt=""></a>
        </div>
        <div class="image">
            <a href="lien2.html"><img src="./images/djezz3.jpg" alt=""></a>
        </div>
        <div class="image">
            <a href="lien3.html"><img src="./images/djezz1.jpg" alt=""></a>
        </div>
        <div class="image">
            <a href="lien4.html"><img src="./images/djezz1.jpg" alt=""></a>
        </div>
        <div class="image">
            <a href="lien5.html"><img src="./images/dezz4.jpg" alt=""></a>
        </div>
        <div class="image">
            <a href="lien6.html"><img src="./images/djezz5.jpg" alt=""></a>
        </div>
    </div>
    <div class="container">
        <div class="image">
            <img src="./images/gitiye1.jpg" alt="">
        </div>
        <div class="image">
            <img src="./images/gitiye2.jpg" alt="">
        </div>
        <div class="image">
            <img src="./images/gitiye3.jpg" alt="">
        </div>
        <div class="image">
            <img src="./images/gitiye4.jpg" alt="">
        </div>
        <div class="image">
            <img src="./images/gitiye5.jpg" alt="">
        </div>
        <div class="image">
            <img src="./images/gitiye6.jpg" alt="">
        </div>
        <div class="image">
            <img src="./images/gitiye7.jpg" alt="">
        </div>
        <div class="image">
            <img src="./images/gitiye8.jpg" alt="">
        </div>
        <div class="image">
            <img src="./images/gitiye9.jpg" alt="">
        </div>
        <div class="image">
            <img src="./images/gitiye10.jpg" alt="">
        </div>
        <div class="image">
            <img src="./images/gitiye11.jpg" alt="">
        </div>
        <div class="image">
            <img src="./images/gitiye12.jpg" alt="">
        </div>
        
    </div>
    <h2>Découvrir nos videos</h2>
    <div class="container-video">
        <?php 
        $serveur = "localhost";
        $utilisateur = "root"; 
        $mot_de_passe = ""; 
        $base_de_donnees = "couture";
        $connexion = mysqli_connect($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

        if (!$connexion) { 
            die("Échec de la connexion : " . mysqli_connect_error()); 
        } 

        $sql = "SELECT * FROM video";
        $resultats = mysqli_query($connexion, $sql);

        if($resultats){
            if(mysqli_num_rows($resultats) > 0) {
                $videos = mysqli_fetch_all($resultats, MYSQLI_ASSOC);
                foreach ($videos as $video) {
                    // Faire quelque chose avec chaque ligne de résultat
                    // Par exemple, afficher le lien de la vidéo :
                    echo '<video class= "video" controls width="250">
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
            🗂️Page: Atelier de Couture
            🏠N'Djamena, Chad
            📞+235 66 06 90 06
            📩atelier@gmail.com
           
            </div> 
    </footer>
</body>
</html>