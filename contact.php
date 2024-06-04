<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projets - CaroCirier</title>
    <link rel="stylesheet" href="styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope&family=Montserrat&display=swap" rel="stylesheet">

    
</head>
<body>
    
<nav id="nav">
            <a href="https://carocirier.fr/" class="logo"><img src="sources/logo.png" alt="logo-caroline-cirier"></a>

            <ul>
                <li>
                    <a href="https://carocirier.fr/">/accueil</a>
                </li>
                <li>
                    <a href="page-projets.html">/projets</a>
                </li>
                <li>
                    <a href="experience.html">/expérience</a>
                </li>
                <li>
                    <a href="contact.php">/contact</a>
                </li>
            </ul>

            <div id="icons"></div>
        
        </nav>


    <main>
        <h1>Contacte-moi</h1>
        
        <form method="post" action="recup_donnees.php">
            <fieldset>
                <legend>Tes coordonnées</legend>
                <label for="prenom">Ton prénom</label><input type="text" name="prenom" id="prenom" required>
                <label for="nom">Ton nom</label> <input type="text" name="nom" id="nom">
                <label for="mail">Mail</label><input type="e-mail" name="mail" id="mail" required>
                <label for="tel">Tel</label><input type="tel" name="tel" id="tel">
            </fieldset>
            <fieldset class="text-box">
                <legend>Ton message</legend>
                <label for="msg">Parle-moi de ton projet</label><br>
                <textarea name="msge" id="msge"></textarea>
            </fieldset>
            <input type="submit" value=" + Envoyer" id="bouton">
        </form>
    </main>
    
    <footer class="footer">
    
        <a href="https://carocirier.fr/"><img src="sources/logo.png" alt="logo-caroline-cirier"></a>
        <a href="https://www.linkedin.com/in/caroline-cirier/" target="_blank"><img src="sources/logo-linkedin-blanc.png" alt="logo linkedin"></a>
        <a href="https://github.com/carojy" target="_blank"><img src="sources/logo-github-blanc.png" alt="logo github"></a>    
    </footer>
    <script src="script_portfolio.js"></script>
</body>
</html>
