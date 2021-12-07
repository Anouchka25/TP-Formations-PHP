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

    <?php 
          $nom = "DUPONT";
          $prenom = "Jean-Michel";
          $ville = "Lyon";
          $langage = "PHP";

          echo "Je m'appelle $nom $prenom et 
          j'habite $ville. J'apprend le language $langage <br>" ;

          // déclarer une variable pays et continent
          //et affichez la France est dans le continent de l'Europe
          $pays= "Congo";
          $continent = "Afrique";
          echo "Votre pays $pays est dans le continent de $continent";



    ?>
</body>
</html>