<?php
        //On démarre la session
        session_start();
    ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include("entete.php"); ?>
    <?php
        // On s'amuse à créer quelques variables de session dans $_SESSION
        $_SESSION['prenom'] = 'Jean';
        $_SESSION['nom'] = 'Dupont';
        $_SESSION['age'] = 24;
        //$_SESSION['panier'] = "Parfum St Laurent";
        $panier = ["Parfum St Laurent", "Chaussure mocassins", "Lunettes de soleil"];
        $_SESSION['panier'] = count($panier);

        echo '<br> Vous avez '.$_SESSION['panier'].' articles dans votre panier';

    ?>
            <p>Vous êtes sur la page d'accueil </p>
</body>
</html>