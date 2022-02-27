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
require_once 'connexion.php';

$sql = "SELECT * FROM users WHERE numsecu = ?";

$stmt= $pdo->prepare($sql);
$stmt->execute([$numsecu]);
$user = $stmt->fetchAll();
foreach ($user as $row) {
?>

<fieldset id="main">
<legend>Notre formulaire :</legend>
<form action="modifierT.php" method="post">
<label>Nom:</label>
<input type="text" name="nom" value="<?php echo $row['nom'] ?>" placeholder="Votre nom"><br><br>
<label>Prénom:</label>
<input type="text" name="prenom" value="<?php echo $row['prenom'] ?>" placeholder="votre prénom" ><br><br>
<label>Date:</label>
<input type="date" name="ladate" value="<?php echo $row['ladate'] ?>"><br><br>
<label>Numéro de la sécurité sociale:</label>
<input type="text" name="numsecu" value="<?php echo $numsecu ?>" ><br><br>
<input type="submit" name="valider" value=" Envoyer "> &nbsp&nbsp&nbsp
<input type="reset" value="Annuler">
</fieldset>
</form>
<?php } ?>
</body>
</html>