<?php
session_start();

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="atelier de couture">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Outfit:wght@100..900&family=Parisienne&family=Young+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <title>Acceuil</title>
</head>
<body>
    <header class="header">
        <h1>ATELIER DE COUTURE</h1>
        <p class="paragraphe">Bienvenue sur notre boutique en ligne de vêtements</p>
        <button onclick="window.location.href='creation.php'" class="bouton-inscrire">S'inscrire</button>
        
        <?php
         if(isset($_SESSION['email'])){
        echo    ' <button onclick="window.location.href='."'".'commande.php'. "'" .'" class="bouton-inscrire">Commander</button>';
        
        
        // '<button>Commander</button>';
        }
   
        if(isset($_SESSION['email'])){
            echo ' <button onclick="window.location.href='."'".'deconnexion.php'. "'" .'" class="bouton-inscrire">Deconnexion</button>';
        } else{
            echo '<button onclick="window.location.href='."'".'connecter.php'."'".'" class="bouton-inscrire">Se Connecter</button>';
        }
?>
    </header>    
    <nav>
        <a href="index.php">Accueil</a>
        <a href="propos.html">A propos</a>
        <a href="contact.html">Contact</a>
    </nav>
    <main>
        <h2>Découvrir nos collections</h2>
        <div class="container">
            <div class="image">
                <h4>Ensemble 2 pieces pour Homme</h4>
                 <p>prix: 89,99 €</p>
                <a href="./detail/detail1.html"><img src="./img/img 29.jpg" alt=""></a>
            </div>
            <div class="image">
                <h4>Ensemble 2 pieces pour Homme</h4>
                <p>prix: 89,99 €</p>
                <a href="./detail/detail1.html"><img src="./img/img 4.jpg" alt=""></a>
            </div>
    
            <div class="image">
            <h4>Ensemble 2 pieces pour Homme</h4>
            <p>prix: 89,99 €</p>
                <a href="./detail/detail1.html"><img src="./img/img 5.jpg" alt=""></a>
            </div>
            <div class="image">
                <h4>Ensemble 2 pieces pour Homme</h4>
                <p>prix: 89,99 €</p>
                <a href="./detail/detail1.html"><img src="./img/img 6.jpg" alt=""></a>
            </div>
            <div class="image">
                <h4>Ensemble 2 pieces pour Homme</h4>
                <p>prix: 89,99 €</p>
                <a href="./detail/detail1.html"><img src="./img/img 7.jpg" alt=""></a>
            </div>
            <div class="image">
                <h4>Ensemble 2 pieces pour Homme</h4>
                <p>prix: 89,99 €</p>
                <a href="./detail/detail1.html"><img src="./img/img 8.jpg" alt=""></a>
            </div>
            <div class="image">
                <h4>Ensemble 2 pieces pour Homme</h4>
                <p>prix: 89,99 €</p>
                <a href="./detail/detail1.html"><img src="./img/img 9.jpg" alt=""></a>
            </div>
            <div class="image">
                <h4>Ensemble 2 pieces pour Homme</h4>
                <p>prix: 89,99 €</p>
                <a href="./detail/detail1.html"><img src="./img/img 10.jpg" alt=""></a>
            </div>
            <div class="image">
                <h4>Ensemble 2 pieces pour Homme</h4>
                <p>prix: 89,99 €</p>
                <a href="./detail/detail1.html"><img src="./img/img 11.jpg" alt=""></a>
            </div>
            <div class="image">
                <h4>Ensemble 2 pieces pour Homme</h4>
                <p>prix: 89,99 €</p>
                <a href="./detail/detail1.html"><img src="./img/img 12.jpg" alt=""></a>
            </div>
            <div class="image">
                <h4>Ensemble 2 pieces pour Homme</h4>
                <p>prix: 89,99 €</p>
                <a href="./detail/detail1.html"><img src="./img/img 13.jpg" alt=""></a>
            </div>
            <div class="image">
                <h4>Ensemble 2 pieces pour Homme</h4>
                <p>prix: 89,99 €</p>
                <a href="./detail/detail1.html"><img src="./img/img 14.jpg" alt=""></a>
            </div>
            <div class="image">
                <h4>Ensemble 2 pieces pour Homme</h4>
                <p>prix: 89,99 €</p>
                <a href="./detail/detail1.html"><img src="./img/img 14.jpg" alt=""></a>
            </div>
            <div class="image">
                <h4>Ensemble 2 pieces pour Homme</h4>
                <p>prix: 89,99 €</p>
                <a href="./detail/detail1.html"><img src="./img/img 15.jpg" alt=""></a>
            </div>
            <div class="image">
                <h4>Ensemble 2 pieces pour Homme</h4>
                <p>prix: 89,99 €</p>
                <a href="./detail/detail1.html"><img src="./img/img 16.jpg" alt=""></a>
            </div>
            <div class="image">
                <h4>Ensemble 2 pieces pour Homme</h4>
                <p>prix: 89,99 €</p>
                <a href="./detail/detail1.html"><img src="./img/img 17.jpg" alt=""></a>
            </div>
            <div class="image">
                <h4>Ensemble 2 pieces pour Homme</h4>
                <p>prix: 89,99 €</p>
                <a href="./detail/detail1.html"><img src="./img/img 18.jpg" alt=""></a>
            </div>
            <div class="image">
                <h4>Ensemble 2 pieces pour Homme</h4>
                <p>prix: 89,99 €</p>
                <a href="./detail/detail1.html"><img src="./img/img 19.jpg" alt=""></a>
            </div>
            <div class="image">
            <h4>Ensemble 2 pieces pour Homme</h4>
            <p>prix: 89,99 €</p>
                <a href="./detail/detail1.html"><img src="./img/img 20.jpg" alt=""></a>
            </div>
            <div class="image">
                <h4>Ensemble 2 pieces pour Homme</h4>
                <p>prix: 89,99 €</p>
                <a href="./detail/detail1.html"><img src="./img/img 21.jpg" alt=""></a>
            </div>
            <div class="image">
                <h4>Ensemble 2 pieces pour Homme</h4>
                <p>prix: 89,99 €</p>
                <a href="./detail/detail1.html"><img src="./img/img 22.jpg" alt=""></a>
            </div>
            <div class="image">
            <h4>Ensemble 2 pieces pour Homme</h4>
            <p>prix: 89,99 €</p>
                <a href="./detail/detail1.html"><img src="./img/img 23.jpg" alt=""></a>
            </div>
            <div class="image">
                <h4>Ensemble 2 pieces pour Homme</h4>
                <p>prix: 89,99 €</p>
                <a href="./detail/detail1.html"><img src="./img/img 24.jpg" alt=""></a>
            </div>
            <div class="image">
                <h4>Ensemble 2 pieces pour Homme</h4>
                <p>prix: 89,99 €</p>
                <a href="./detail/detail1.html"><img src="./img/img 25.jpg" alt=""></a>
            </div>
            <div class="image">
                <h4>Ensemble 2 pieces pour Homme</h4>
                <p>prix: 89,99 €</p>
                <a href="./detail/detail1.html"><img src="./img/img 26.jpg" alt=""></a>
            </div>
            <div class="image">
                <h4>Ensemble 2 pieces pour Homme</h4>
                <p>prix: 89,99 €</p>
                <a href="./detail/detail1.html"><img src="./img/img.jpg" alt=""></a>
            </div>
            <div class="image">
                <h4>Ensemble 2 pieces pour Homme</h4>
                <p>prix: 89,99 €</p>
                <a href="./detail/detail1.html"><img src="./img/img 28.jpg" alt=""></a>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="image">
                <h4>DJEZNER HOMME</h4>
                <p>Prix: 99,99 €</p>
                <a href="./detail/detail1.html"><img src="./images/djezz2.jpg" alt=""></a>
            </div>
            <div class="image">
            <h4>DJEZNER HOMME</h4>
                <p>Prix: 99,99 €</p>
                <a href="lien2.html"><img src="./images/djezz3.jpg" alt=""></a>
            </div>
            <div class="image">
            <h4>DJEZNER HOMME</h4>
                <p>Prix: 99,99 €</p>
                <a href="lien3.html"><img src="./images/djezz1.jpg" alt=""></a>
            </div>
            <div class="image">
            <h4>DJEZNER HOMME</h4>
                <p>Prix: 99,99 €</p>
                <a href="lien4.html"><img src="./images/djezz1.jpg" alt=""></a>
            </div>
            <div class="image">
            <h4>DJEZNER HOMME</h4>
                <p>Prix: 99,99 €</p>
                <a href="lien5.html"><img src="./images/dezz4.jpg" alt=""></a>
            </div>
            <div class="image">
            <h4>DJEZNER HOMME</h4>
                <p>Prix: 99,99 €</p>
                <a href="lien6.html"><img src="./images/djezz5.jpg" alt=""></a>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="image">
                <h4>Vêtements prêt-à-porter</h4>
                <p>prix: 150 €</p>
                <img src="./images/gitiye1.jpg" alt="">
            </div>
            <div class="image">
                <h4>Vêtements prêt-à-porter</h4>
                <p>prix: 150 €</p>
                <img src="./images/gitiye2.jpg" alt="">
            </div>
            <div class="image">
            <h4>Vêtements prêt-à-porter</h4>
                <p>prix: 150 €</p>
                <img src="./images/gitiye3.jpg" alt="">
            </div>
            <div class="image">
            <h4>Vêtements prêt-à-porter</h4>
                <p>prix: 150 €</p>
                <img src="./images/gitiye4.jpg" alt="">
            </div>
            <div class="image">
            <h4>Vêtements prêt-à-porter</h4>
                <p>prix: 150 €</p>
                <img src="./images/gitiye5.jpg" alt="">
            </div>
            <div class="image">
            <h4>Vêtements prêt-à-porter</h4>
                <p>prix: 150 €</p>
                <img src="./images/gitiye6.jpg" alt="">
            </div>
            <div class="image">
            <h4>Vêtements prêt-à-porter</h4>
                <p>prix: 150 €</p>
                <img src="./images/gitiye7.jpg" alt="">
            </div>
            <div class="image">
            <h4>Vêtements prêt-à-porter</h4>
                <p>prix: 150 €</p>
                <img src="./images/gitiye8.jpg" alt="">
            </div>
            <div class="image">
            <h4>Vêtements prêt-à-porter</h4>
                <p>prix: 150 €</p>
                <img src="./images/gitiye9.jpg" alt="">
            </div>
            <div class="image">
                <h4>Vêtements prêt-à-porter</h4>
                <p>prix: 150 €</p>
                <img src="./images/gitiye10.jpg" alt="">
            </div>
            <div class="image">
            <h4>Vêtements prêt-à-porter</h4>
                <p>prix: 150 €</p>
                <img src="./images/gitiye11.jpg" alt="">
            </div>
            <div class="image">
            <h4>Vêtements prêt-à-porter</h4>
                <p>prix: 150 €</p>
                <img src="./images/gitiye12.jpg" alt="">
            </div>
        </div>
        <hr>
        <h3>Découvrir nos videos</h3>
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
    </main>
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