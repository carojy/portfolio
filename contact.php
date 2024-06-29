<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Contact - caroCirier</title>
    <?php include("assets/balise-head.php"); ?>
</head>

<body>
    
    <?php include("assets/header.php"); ?>

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
    
    <?php include("assets/footer.php"); ?>

</body>
</html>
