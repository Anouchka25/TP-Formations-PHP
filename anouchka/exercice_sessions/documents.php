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
    <h1>Base documentaire reservée aux membres </h1>
    <?php
// on la démarre :)
session_start ();
// On récupère nos variables de session
if (isset($_SESSION['nom']) && isset($_SESSION['prenom'])) {
   
       echo 'Bonjour '.$_SESSION['prenom'] ;

}else {
    echo "Vous n'êtes pas membre";
}
    ?>
</body>
</html>