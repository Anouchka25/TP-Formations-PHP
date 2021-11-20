<?php
require 'connexion.php'; 
$data = $pdo->query("SELECT * FROM users")->fetchAll();

echo('<table border="1">
<colgroup width =150 span=3></colgroup>
<thead> <!-- En-tête du tableau -->
<tr>
   <th>Nom</th>
   <th>Prénom</th>
   <th>Date de naissance</th>
   </thead>
   <tbody> <!-- Corps du tableau --> ');
   foreach ($data as $row) {
   echo ('<tr>');
   echo ('<td>'.$row['nom'].'</td>');
   echo ('<td>'.$row['prenom'].'</td>');
   echo ('<td>'.$row['ladate'].'</td>');
   echo('</tr>');
    }
   echo('<tbody>');
   echo('</table>');

?>