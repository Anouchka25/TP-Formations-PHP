<h1>  Formulaire d'inscription à l'annuaire</h1>
<fieldset id="main">
<legend>Notre formulaire :</legend>
<form action="destination.php" method="post" enctype="multipart/form-data">
<label>Nom:</label>
<input type="text" name="nom" placeholder="Votre nom"><br><br>
<label>Prénom:</label>
<input type="text" name="prenom" placeholder="votre prénom" ><br><br>
<label>Date:</label>
<input type="date" name="ladate" ><br><br>
<label>Numéro de la sécurité sociale:</label>
<input type="text" name="numsecu" ><br><br>
<label>Photo</label>
<input type="file" name="file" ><br><br>
<label>CV</label>
<input type="file" name="file2" ><br><br>
<input type="submit" name="valider" value=" Envoyer "> &nbsp&nbsp&nbsp
<input type="reset" value="Annuler">
</fieldset>
</form>  