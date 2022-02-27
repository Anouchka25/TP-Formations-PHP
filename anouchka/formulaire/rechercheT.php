<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
<colgroup width =150 span=3></colgroup>
<thead> <!-- En-tête du tableau -->
<tr>
   <th>Nom</th>
   <th>Prénom</th>
   <th>Date de naissance</th>
   <th>Numéro sécu</th>
   <th>Actions</th>
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
       echo ('<td><a href="modifier.php?numsecu='.$numsecu.'">Modifier</a></td>');
       echo('</tr>');
}
?>
   </tbody>
   </table> 
</body>
</html>