<?php
// on la démarre :)
session_start ();
// On récupère nos variables de session
if (isset($_SESSION['numsecu']) && isset($_SESSION['password'])) {

    header ('location: moncompte.php');
}
else {
   



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
    
<h1>  Formulaire de connexion</h1>
<fieldset id="main">
<legend>Notre formulaire de connexion :</legend>
<form action="loginT.php" method="post">
<label>Num sécu:</label>
<input type="text" name="numsecu" placeholder="Votre numsecu"><br><br>
<label>Mot de passe:</label>
<input type="password" name="password" placeholder="votre mot de passe" ><br><br>
<input type="submit" name="valider" value=" Connexion "> &nbsp&nbsp&nbsp
<input type="reset" value="Annuler">
</fieldset>
</form>  
</body>
</html>

<?php  
}
?>