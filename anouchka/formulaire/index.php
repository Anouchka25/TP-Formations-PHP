<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>  Formulaire d'inscription</h1>
<fieldset id="main">
<legend>Notre formulaire :</legend>
<form action="index.php" method="post">
<label>Nom:</label>
<input type="text" name="nom" placeholder="Votre nom"><br><br>
<label>Prénom:</label>
<input type="text" name="prenom" placeholder="votre prénom" ><br><br>
<label>Date:</label>
<input type="date" name="ladate" ><br><br>
<label>Numéro de la sécurité sociale:</label>
<input type="text" name="numsecu" ><br><br>
<input type="submit" name="valider" value=" Envoyer "> &nbsp&nbsp&nbsp
<input type="reset" value="Annuler">
</fieldset>
</form>

<h3>Affichage de l'utilisateur ajouté :</h3>
<?php 
  include('destination.php');
?>


<h1>  Recherche un utilisateur</h1>
<fieldset id="main">
<legend>Notre formulaire de recherche :</legend>
<form action="index.php" method="post">
<label>Numéro de la sécurité sociale:</label>
<input type="text" name="numsecu" ><br><br>
<input type="submit" name="valider" value=" Envoyer "> &nbsp&nbsp&nbsp
<input type="reset" value="Annuler">
</fieldset>
</form>
<table border="1">
<colgroup width =150 span=3></colgroup>
<thead> <!-- En-tête du tableau -->
<tr>
   <th>Nom</th>
   <th>Prénom</th>
   <th>Date de naissance</th>
   </thead>
   <tbody> <!-- Corps du tableau -->
<?php
require 'connexion.php';

// On vérifie si la variable existe et sinon elle vaut NULL
$numsecu = isset($_POST['numsecu']) ? $_POST['numsecu'] : NULL;

$sql = "SELECT * FROM users WHERE numsecu = ?";

$stmt= $pdo->prepare($sql);
$stmt->execute([$numsecu]);
$user = $stmt->fetchAll();
foreach ($user as $row) {
    echo ('<tr>');
       echo ('<td>'.$row['nom'].'</td>');
       echo ('<td>'.$row['prenom'].'</td>');
       echo ('<td>'.$row['ladate'].'</td>');
       echo ('<td>'.$numsecu.'</td>');
       echo('</tr>');
}
?>
   </tbody>
   </table>
</body>
</html>



