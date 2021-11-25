<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mon premier programme PHP</h1>
    <form action="" method="post">
        <fieldset>
            <legend>On fait connaissance ?</legend>
        <label >Quel est votre nom ?</label>
        <input type="text" name="nom"> <br><br>

        <label >Quel est votre prenom ?</label>
        <input type="text" name="prenom" ><br><br>

        <label >Où habitez-vous ?</label>
        <input type="text" name="ville" >
        <br><br><br>
        <input type="submit" value="Valider">
        </fieldset>
    </form>

    <?php 
       //$nom = "MINKOUE OBAME";
       //$prenom = "Anouchka";
       //$ville = "Yvetot";

       $nom = isset($_POST['nom']) ? $_POST['nom'] : NULL;
       $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : NULL;
       $ville = isset($_POST['ville']) ? $_POST['ville'] : NULL;
       
       echo "Bonjour tout le monde <br>";

       echo "Nous sommes le 25/11/2021 <br>";

      echo "Je m'appelle $nom $prenom j'habite à $ville <br>";

      echo "je commence ma formation aujourd'hui <br>"; 
      echo "je suis d'origine Congolaise <br>";
      echo "le php est langage serveur ";
    ?>
</body>
</html>