<?php
        //On démarre la session
        session_start();
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include("entete.php"); ?>
    <h1>Mon compte</h1>
    <?php
       echo 'Bonjour '.$_SESSION['nom'].' '.$_SESSION['prenom'].'<br>' ;

       echo 'Vous avez '.$_SESSION['panier'].' articles dans votre panier';
    ?>
</body>
</html>