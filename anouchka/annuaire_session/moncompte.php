<?php
// on la démarre :)
session_start ();
// On récupère nos variables de session
if (isset($_SESSION['numsecu']) && isset($_SESSION['password'])) {
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
<h1>Mon compte</h1>
<?php

echo('<table border="1">
<colgroup width =150 span=3></colgroup>
<thead> <!-- En-tête du tableau -->
<tr>
   <th>Photo</th>
   <th>Nom</th>
   <th>Prénom</th>
   <th>Date de naissance</th>
   <th>Numéro sécu</th>
   <!-- <th>Actions</th> -->
   </thead>
   <tbody> <!-- Corps du tableau --> ');
    echo ('<tr>');
    echo '<td><img src="uploads/'.$_SESSION['monfichier'].'" width=150px ></td>';
    echo ('<td>'.$_SESSION['nom'].'</td>');
    echo ('<td>'.$_SESSION['prenom'].'</td>');
    echo ('<td>'.date('d/m/Y', strtotime($_SESSION['ladate'])).'</td>');
    //echo ('<td>'.$_SESSION['ladate'].'</td>');
    echo ('<td>'.$_SESSION['numsecu'].'</td>');
    //echo ('<td><a href="modifier.php?numsecu='.$_SESSION['numsecu'].'" >Modifier</a></td>');
    echo('</tr>');

echo('<tbody>');
echo('</table>');     
?>
</body>
</html>

<?php
}
else {
   header ('location: login.php');
}     
?>