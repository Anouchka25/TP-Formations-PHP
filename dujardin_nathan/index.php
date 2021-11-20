<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
</head>
<body>
    
<h1>  Mon premier formulaire</h1>
<fieldset id="main">
<legend>Notre formulaire :</legend>
<form action="destination.php" method="post">
<label>Nom:</label>
<input type="text" name="nom" placeholder="Votre nom"><br><br>
<label>Prénom:</label>
<input type="text" name="prenom" placeholder="votre prénom" ><br><br>
<label>Date:</label>
<input type="date" name="ladate" ><br><br>
<input type="submit" name="valider" value=" Envoyer "> &nbsp&nbsp&nbsp
<input type="reset" value="Annuler">
</fieldset>
</form>

</body>
</html>