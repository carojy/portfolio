<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Projets - caroCirier</title>
    <?php include("assets/balise-head.php"); ?>
</head>

<body>
     
    <?php include("assets/header.php"); ?>

    <main>
        <h1>Mes projets</h1>
        <div class="entete">
        <p>Te voilà arrivé sur ma page Projets. Ici tu trouveras tous ce que j'ai pu faire depuis 2024. Certains projets ont été faits dans le cadre de ma formation: ceux-là ont été réalisés en équipe en 7 jours ouvrés. 
            Si un projet t'intéresses, tu peux aller voir le code dans le repo GitHub associé en cliquant dessus. Et si ça t'inspires, contacte-moi pour un projet ! 
        </p>
        <a href="mailto:cirier.c@gmail.com" target="_blank" class="cta-demande-projet">Un projet ?<br>Dis le moi !</a>
        </div>

        <div class="projets">

            <a href="" target="_blank" class="lien-conteneur-projet">
                <img src="sources/MEUBLECO.png" alt="projet site e-commerce react / symphony">
                <div class="projet-hover">
                    <span class="text-hover">Création d'un site e-commerce<br>
                        <span class="voir-github">&#x1F50E Voir sur GitHub</span>
                    </span>
                </div>
            </a>

            <a href="https://github.com/carojy/projet-collectif-reseau-social-php" target="_blank" class="lien-conteneur-projet">
                <img src="sources/social-network-php.png" alt="projet réseau social en PHP">
                <div class="projet-hover">
                    <span class="text-hover">Code à débugger + ajout de fonctionnalités<br>
                        <span class="voir-github">&#x1F50E Voir sur GitHub</span>
                    </span>
                </div>
            </a>

            <a href="https://github.com/carojy/projet-collectif-extension-chrome" target="_blank" class="lien-conteneur-projet">
                <img src="sources/EXTENSION-NAVIGATEUR.png" alt="projet Extension de navigateur">
                <div class="projet-hover">
                    <span class="text-hover">Traduction de la sélection vers le morse (dictionnaire intégré) ou vers le minion (API)<br>
                        <span class="voir-github">&#x1F50E Voir sur GitHub</span>
                    </span>
                </div>
            </a>

            <a href="https://carojy.github.io/API_Dataviz/" target="_blank" class="lien-conteneur-projet">
                <img src="sources/API-DATAVIZ.png" alt="projet API Dataviz">
                <div class="projet-hover">
                    <span class="text-hover">Affichage du niveau de la nappe phréatique de Rochefort-du-Gard entre janvier 2014 et 2024<br>
                        <span class="voir-github">&#x1F50E Voir le projet</span>
                    </span>
                </div>
            </a>
            
            <a href="https://github.com/carojy/projet-collectif-pico-8" target="_blank" class="lien-conteneur-projet">
                <img src="sources/PICO-8.png" alt="projet Pico8">
                <div class="projet-hover">
                    <span class="text-hover">Mini-jeu d'aventure en Lua. Panthéra doit trouver sa nourriture en évitant les feux de forêts causés par le dérèglement climatique<br>
                        <span class="voir-github">&#x1F50E Voir sur GitHub</span>
                    </span>
                </div>
            </a>
            
        </div>
        
       
    </main>
    
    <?php include("assets/footer.php"); ?>

</body>
</html>
