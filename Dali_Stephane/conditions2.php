<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="styles.css" rel="stylesheet">
</head>
<body>
<h1>Conditions en PHP</h1>
<form action="" method="post">
        <fieldset>
            <legend>Bienvenue sur Madame Figaro</legend>
            <input type="number" name="age" placeholder = "Votre age ?">
            <input type="text" name="sexe" placeholder = "Vous êtes Homme(M) ou Femme(F) ?">
            <input type="submit" value="Valider">
        </fieldset>
    </form>
<br><br><br>
    <?php
   /**
    * 1/Rédiger une expression conditionnelle pour tester 
    *si un nombre est à la fois un multiple de 3 et de 5. 
    */
    $nbre = 15;
     // % est le module cad le reste de la division
    if($nbre % 3==0 && $nbre % 5 ==0 ){
        echo "<p>$nbre est bien multiple de 3 et 5</p>";
    }
    else{
        echo "$nbre n'est pas du tout multiple de 3 et 5";
    }
    echo "<br><br>------------------<br>";
    /**
     * 2/Écrire une expression conditionnelle 
     * utilisant les variables $age et $sexe dans 
     * une instruction if pour sélectionner une personne 
     * de sexe féminin dont l’age est compris 
     * entre 21 et 40 ans et afficher un message de 
     * bienvenue approprié.
     */
    //$age=21;
    //$sexe ="F";
    $age = isset($_POST['age']) ? $_POST['age'] : NULL; 
    $sexe = isset($_POST['sexe']) ? $_POST['sexe'] : NULL;

    if($age>=21 AND $age<=40 AND $sexe == "F"){
        echo "Bienvenue Madame";
    }
    else {echo "Désolé, vous ne pouvez pas y accéder<br><br>";}

    //Programme Vaccin
    echo "<h2>Bienvenue au centre de vaccination pour prendre un rendez-vous</h2> <br>";
      $dose = 1;
      if($dose ==0){
          echo "Vous devez vous faire vacciner";
      }elseif ($dose ==1) {
         echo "Vous devez prendre la 2eme dose";
      }elseif($dose == 2){
        echo "Vous devez prendre la 3eme dose";
      }elseif($dose ==3){
        echo "Vous devez faire un rappel de la 3eme dose";
      }
      else{
          echo "Vous êtes un extraterrestre";
      }
    ?>
    <a href="rdv.php">Prendre rendez-vous</a>
</body>
</html>