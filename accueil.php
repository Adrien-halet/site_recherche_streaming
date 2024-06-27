<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Accueil</title>
</head>
<body>
                                        <!-- Block pour la NavBar -->
    <div class="navbar">
        <div class="site-name">**********</div>
        <div class="menu">
            <a href="#accueil">Accueil</a>
            <div class="dropdown">
                <a href="#categories" class="dropbtn">Catégories</a>
                <div class="dropdown-content">
                    <a href="#action">Action</a>
                    <a href="#comedy">Comédie</a>
                    <a href="#drama">Drame</a>
                    <a href="#horror">Horreur</a>
                    <a href="#sci-fi">Science-fiction</a>
                    <a href="#romance">Romance</a>
                </div>
            </div>
        </div>
        <div class="search-container">
            <input type="text" placeholder="Recherche...">
            <button type="button">
                <img src="asset_pour image/moteur-de-recherche.png" alt="Recherche" width="30" height="30">
            </button>
        </div>
        <div class="account-logo">
            <a href="pages/authenticate.php">
                <img src="asset_pour image/utilisateur.png" alt="Compte">
            </a>
        </div>
    </div>
                                        <!-- Block pour la partie haut de page -->
    <div class="header">
        <div class="title">
            <h1>Bienvenue sur *********</h1>
            <h3>Votre moteur de recherche cinématographique</h3>
        </div>
    </div>
    <div class="main-content"></div>
                                        <!-- Block pour le logo du site -->
    <div class="logo_site">
        <!-- Emplacement du logo du site !! -->
    </div>
                                        <!-- Block pour le corps du page et la partie Actualité -->
    <div class="news">
        <a href="news1">
            <img class="img1" src="asset_pour image/Lion_(Panthera_leo)_male_6y.jpg" alt="news1">
            <span class="story1">Synopsis</span>
        </a>
        <a href="news2">
            <img class="img2" src="asset_pour image/Lion_(Panthera_leo)_male_6y.jpg" alt="news2">
            <span class="story2">Synopsis</span>
        </a>
        <a href="news3">
            <img class="img3" src="asset_pour image/Lion_(Panthera_leo)_male_6y.jpg" alt="news2">
            <span class="story3">Synopsis</span>
        </a>
    </div>
                                        <!-- Block pour le bas de page -->
    <div class="footer">
        <div class="logo_site_footer">
            <!-- Emplacement du logo du site -->
        </div>
        <a href="lien_footer">
            <span>Conditions générales et avis de confidentialité</span>
            <span>Avertissement relatif aux cookies</span>
            <span>Donnez-nous votre avis</span>
            <span>Aide</span>
            <span>Don</span>
        </a>
        <div class="concepteur">
            <span>2024, Adrien Halet by LykeiosProg</span>
        </div>
    </div>
</body>
</html>
