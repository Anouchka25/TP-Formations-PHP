<?php
require 'connexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Liste des utilisateurs enregistrés</h1>

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
    
     $data = $pdo->query("SELECT * FROM users")->fetchAll();
     foreach($data as $cle => $valeur){
         echo '<tr>';
         echo '<td>'.$valeur['nom'].'</td>';
         echo '<td>'.$valeur['prenom'].'</td>';
         echo '<td>'.$valeur['ladate'].'</td>';
         echo '</tr>';
     }
    ?>

    </tbody>
    </table>
</body>
</html>