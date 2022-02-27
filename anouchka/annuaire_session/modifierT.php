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
</head>
<body>
<h1>  Modification</h1>
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

       $sql = "UPDATE users SET
       nom = ?, 
       prenom = ?, 
       ladate = ?, 
       numsecu = ?, 
       monfichier = ?";
       $stmt= $pdo->prepare($sql);
       $stmt->execute([$nom, $prenom, $ladate, $numsecu, $file]);
   }
   else{
       echo "Mauvaise extension";
   }

?>

</body>
</html>

<?php
}
else {
   header ('location: login.php');
}     
?>