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

<fieldset id="main">
<legend>Notre formulaire :</legend>
<form action="modifierT.php" method="post">
<label>Photo:</label>
<input type="file" name="file" value="<?php echo $_SESSION['monfichier'] ?>" ><br><br>
<label>Nom:</label>
<input type="text" name="nom" value="<?php echo $_SESSION['nom'] ?>" placeholder="Votre nom"><br><br>
<label>Prénom:</label>
<input type="text" name="prenom" value="<?php echo $_SESSION['prenom'] ?>" placeholder="votre prénom" ><br><br>
<label>Date:</label>
<input type="date" name="ladate" value="<?php echo $_SESSION['ladate'] ?>"><br><br>
<label>Numéro de la sécurité sociale:</label>
<input type="text" name="numsecu" value="<?php echo $_SESSION['numsecu'] ?>" ><br><br>
<input type="submit" name="valider" value=" Mettre à jour "> &nbsp&nbsp&nbsp
<input type="reset" value="Annuler">
</fieldset>
</form>
</body>
</html>

<?php
}
else {
   header ('location: login.php');
}     
?>