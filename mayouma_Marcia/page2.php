<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Générateur de lettre de motivation</h1>
    <form action="" method="post">
        <fieldset>
            <legend>Formulaire</legend>
            <input type="text" name="genre" placeholder ="Madame/Monsieur">
            <input type="text" name="nom" placeholder ="Votre nom">
            <input type="text" name="prenom" placeholder ="Votre prenom">
            <input type="text" name="poste" placeholder ="Votre poste">
            <input type="number" name="annees_experience" placeholder ="Nombre d'années d'experiences">
            <input type="text" name="domaine" placeholder ="Votre domaine d'activité">
            <input type="submit" value="Générer votre lettre de motivation">
        </fieldset>
    </form>
    <?php 
    /* Créer ces variables : 
     * nom
     * prenom 
     * genre : Monsieur ou Madame 
     * poste 
     * annees_experience 
     * domaine 
     * Pour afficher un texte comme ceci :
     * Je m'appelle Madame DURAND et je suis intéressé par le poste de Puricultrice. 
     * j'ai travaillé pendant 10 ans dans le domaine petite enfance.
    */
     $nom = isset($_POST['nom']) ? $_POST['nom'] : NULL;
     $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : NULL; 
     $poste = isset($_POST['poste']) ? $_POST['poste'] : NULL; 
     $genre = isset($_POST['genre']) ? $_POST['genre'] : NULL; 
     $annees_experience = isset($_POST['annees_experience']) ? $_POST['annees_experience'] : NULL; 
     $domaine = isset($_POST['domaine']) ? $_POST['domaine'] : NULL; 
     
    echo "Je m'appelle $genre $nom $prenom et je suis interessé par le poste de $poste j'ai $annees_experience ans d'expérience dans le domaine de $domaine"
         
    ?>
</body>
</html>