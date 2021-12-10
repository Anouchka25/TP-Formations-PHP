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
          echo 'Je m\'appelle '.$nom.' '.$prenom.'et j\'habite '.$ville;          
          // déclarer une variable pays et continent
          //et affichez la France est dans le continent de l'Europe
          $pays= "Congo";
          $continent = "Afrique";
          echo "Votre pays $pays est dans le continent de $continent";
          echo "<br><br>";
          echo 'Votre pays '.$pays.' est dans le continent de '.$continent;
          
          echo "<br>-------- Opérations ----------<br>";
          $nombre1 = 15;
          $nombre2 = 3;
          // addition, soustraction, division et modulo %
          echo "$nombre1 + $nombre2 = ";
          echo $nombre1 + $nombre2;
          echo "<br><br>";
          echo "$nombre1 - $nombre2=";
          echo $nombre1 - $nombre2;
          echo"<br><br>";
          echo"$nombre1 / $nombre2=";
          echo $nombre1 / $nombre2;
          echo"<br><br>";
          echo"$nombre1 % $nombre2=";
          echo $nombre1 % $nombre2;

    ?>
</body>

</html>