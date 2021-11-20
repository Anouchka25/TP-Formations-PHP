<?php
require 'connexion.php';

// On vérifie si la variable existe et sinon elle vaut NULL
$nom = isset($_POST['nom']) ? $_POST['nom'] : NULL;
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : NULL;
$ladate = isset($_POST['ladate']) ? $_POST['ladate'] : NULL;

$sql = "INSERT INTO users (nom, prenom, ladate) VALUES (?,?,?)";
$stmt= $pdo->prepare($sql);
$stmt->execute([$nom, $prenom, $ladate]);

echo('<table border="1">
    <colgroup width =150 span=3></colgroup>
	<thead> <!-- En-tête du tableau -->
   <tr>
       <th>Nom</th>
       <th>Prénom</th>
       <th>Date de naissance</th>
       </thead>
       <tbody> <!-- Corps du tableau --> ');
       echo ('<tr>');
       echo ('<td>'.$nom.'</td>');
       echo ('<td>'.$prenom.'</td>');
       echo ('<td>'.date('d/m/Y', strtotime($ladate)).'</td>');
       echo('</tr>');
       echo('</tbody>');
       echo('</table>');
