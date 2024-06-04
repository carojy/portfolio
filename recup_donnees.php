<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - caroCirier</title>
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
        
        
        <?php 
        error_reporting(E_ALL);
        ini_set('display_errors', TRUE);
        ini_set('display_startup_errors', TRUE);

        $host="127.0.0.1:3306"; $dbname="u355588365_testform"; $user="u355588365_rocca78" ; $pass="dTakidms9e4(ndg&!55f";
        try{
            $bddm=new PDO("mysql:host={$host}; dbname={$dbname}; charset=utf8", $user, $pass);
            $bddm->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $bddm->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        }
        catch(PDOException $e){
            die("Oupsi ... une erreur a été trouvée: ".$e->getMessage());
        }

        //echo $_POST["mail"];

        if(isset($_POST["prenom"])) {
            //echo"Merci pour ton message :)";
            $insert1=$bddm->prepare("INSERT INTO msgrecus (prenom,nom,mail,tel,msg) VALUES (:prenom,:nom,:mail,:tel,:msge)");
            
            $insert1->bindParam(':prenom',$_POST["prenom"]);
            $insert1->bindParam(':nom',$_POST["nom"]);
            $insert1->bindParam(':mail',$_POST["mail"]);
            $insert1->bindParam(':tel',$_POST["tel"]);
            $insert1->bindParam(':msge',$_POST["msge"]);
            
            
            $insert1->execute(); ?>

            <h1>Merci pour ton message 	&#x1F48C !</h1>
            <p class="message">Ton message a bien été envoyé et j'y répondrai dès que possible.</p>
            
            <?php 

        }

        ?>

    
    

    </main>
    
    <footer class="footer">
    
        <a href="https://carocirier.fr/"><img src="sources/logo.png" alt="logo-caroline-cirier"></a>
        <a href="https://www.linkedin.com/in/caroline-cirier/" target="_blank"><img src="sources/logo-linkedin-blanc.png" alt="logo linkedin"></a>
        <a href="https://github.com/carojy" target="_blank"><img src="sources/logo-github-blanc.png" alt="logo github"></a>    
    </footer>
    <script src="script_portfolio.js"></script>
</body>
</html>




