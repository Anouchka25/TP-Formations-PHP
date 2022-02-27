<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Liste des membres</title>
   <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include("entete.php"); ?>
<h1>Liste des membres</h1>

<?php
require 'connexion.php'; 
$data = $pdo->query("SELECT * FROM users ORDER BY nom")->fetchAll();

echo('<table border="1">
<colgroup width =150 span=3></colgroup>
<thead> <!-- En-tête du tableau -->
<tr>
   <th>Photo</th>
   <th>Nom</th>
   <th>Prénom</th>
   <th>Date de naissance</th>
   <th>Numéro sécu</th>
   </thead>
   <tbody> <!-- Corps du tableau --> ');
   foreach ($data as $row) {
   echo ('<tr>');
   echo '<td><img src="uploads/'.$row['monfichier'].'" width=150px ></td>';
   echo ('<td>'.$row['nom'].'</td>');
   echo ('<td>'.$row['prenom'].'</td>');
   echo ('<td>'.date('d/m/Y', strtotime($row['ladate'])).'</td>');
   echo ('<td>'.$row['numsecu'].'</td>');
   echo('</tr>');
    }
   echo('<tbody>');
   echo('</table>');

   

?>

   
</body>
</html>