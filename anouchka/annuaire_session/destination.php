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
<?php
require 'connexion.php';

//require 'upload_file.php';

// On vérifie si la variable existe et sinon elle vaut NULL
$nom = isset($_POST['nom']) ? $_POST['nom'] : NULL;
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : NULL;
$ladate = isset($_POST['ladate']) ? $_POST['ladate'] : NULL;
$numsecu = isset($_POST['numsecu']) ? $_POST['numsecu'] : NULL;
$name = isset($_FILES['file']['name']) ? $_FILES['file']['name'] : NULL;


//if(isset($_FILES['file'])){
    $tmpName = $_FILES['file']['tmp_name'];
    //$name = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];

    $tabExtension = explode('.', $name);
    $extension = strtolower(end($tabExtension));
    //Tableau des extensions que l'on accepte
    $extensions = ['jpg', 'png', 'jpeg'];
    //Taille max que l'on accepte
    $maxSize = 400000;
    if(in_array($extension, $extensions) && $size <= $maxSize && $error == 0){
        
        $uniqueName = uniqid('', true);
        //uniqid génère quelque chose comme ca : 5f586bf96dcd38.73540086
        $file = $uniqueName.".".$extension;
        //$file = 5f586bf96dcd38.73540086.jpg
        move_uploaded_file($tmpName, 'uploads/'.$file);

        $sql = "INSERT INTO users (nom, prenom, ladate, numsecu, monfichier) VALUES (?,?,?,?,?)";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([$nom, $prenom, $ladate, $numsecu, $file]);
    }
    else{
        echo "Mauvaise extension";
    }
//}

$sql = "SELECT * FROM users WHERE numsecu = ?";

$stmt= $pdo->prepare($sql);
$stmt->execute([$numsecu]);
$user = $stmt->fetchAll();
foreach ($user as $row) {
  if($row['numsecu'] == $numsecu){
     // echo 'Cet utilisateur existe déja !' ;
  }
}

       echo('<table >');
       echo '<tr>';
       echo '<td><img src="uploads/'.$file.'" width=150px ></td>';
       echo ('<td>
        Nom : '.$nom.'<br>
        Prénom : '.$prenom.'<br>
       </td>');
       echo '</tr>';
       echo '<tr>';
       echo '<td>Date de naissance</td>';
       echo ('<td>'.date('d/m/Y', strtotime($ladate)).'</td>');
       echo '</tr>';
       echo '<tr>';
       echo '<td>Numéro de sécu</td>';
       echo ('<td>'.$numsecu.'</td>');
       echo '</tr>';
       echo('</table>');


       
       
       
       
       
       
       $message = 'Nom & prénom : ' .$nom.$prenom."\n".
       'Date de naissance : '.$ladate."\n".
       'Numéro sécu : '.$numsecu."\n".
       'Date de naissance : <a href="http://localhost:8080/TP%20Formations%20PHP/anouchka/formulaire/uploads/'.$file.'" target="_blank">Télécharger</a>' ;

       $to = "clementino.france@gmail.com";
       $subject = "Nouveau mail";
       $headers = "Content-type: text/html; charset=UTF-8";
       //$message = "PHP Mail fonctionne parfaitement";
       $headers = "De :" . $from;
       mail($to,$subject,$message, $headers);
       //echo "L'email a été envoyé.";
?>
</body>
</html>