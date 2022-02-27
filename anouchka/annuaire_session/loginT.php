<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include("entete.php"); ?>

<h1>  Validation de la connexion</h1>

<?php 

require 'connexion.php';

// On vérifie si la variable existe et sinon elle vaut NULL
$numsecu = isset($_POST['numsecu']) ? $_POST['numsecu'] : NULL;
$password = isset($_POST['password']) ? $_POST['password'] : NULL;

$pwd_valide = "123";

$sql = "SELECT * FROM users WHERE numsecu = ?";
$stmt= $pdo->prepare($sql);
$stmt->execute([$numsecu]);
$user = $stmt->fetchAll();

foreach($user as $tab){      
}  

if($numsecu == $tab['numsecu'] && $password == $pwd_valide ){
        session_start ();
        $_SESSION['numsecu'] = $numsecu;
        $_SESSION['password'] = $password;
        $_SESSION['nom'] = $tab['nom'];
        $_SESSION['prenom'] = $tab['prenom'];
        $_SESSION['ladate'] = $tab['ladate'];
        $_SESSION['monfichier'] = $tab['monfichier'];

        // on redirige notre visiteur vers une page de notre section membre
        header ('location: users.php');
    
}
else {echo "Membre inconnu";}


?>
</body>
</html>