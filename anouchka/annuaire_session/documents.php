<?php
// on la démarre :)
session_start ();
// On récupère nos variables de session
if (isset($_SESSION['numsecu']) && isset($_SESSION['password'])) {
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
    <h1>Base documentaire reservée aux membres </h1>
    <?php
   
       echo 'Bonjour '.$_SESSION['prenom'] ;
     ?>
     <p>Sur cette page se trouve des ressources reservées uniquement aux membres. Merci de ne pas les divulguer</p>
</body>
</html>

<?php
}
else {
   header ('location: login.php');
}     
?>