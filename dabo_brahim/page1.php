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
        //Guillemets doubles
        echo "Bonjour tout le monde <br>"; 
        
        echo "Je m'appelle Alexandre <br>";
        echo "j'habite sur paris <br>"; 
        echo "la france est un pays de l'europe";
        echo "<br><br>--------------------<br>";
        $annee = 1970;
        $nom = "Jean-Michel";
        $ville = "Lyon"; 
        $language = "PHP";
        echo "Je m'appelle $nom et je suis née en $annee. J'habite à $ville. J'apprend le langage $language";

        echo "<br>--------Opérations------------<br>";
        $nombre1 = 15;
        $nombre2 = 3;
        echo "$nombre1 + $nombre2 = ";
        echo $nombre1 + $nombre2;
        echo "<br>";
        echo "$nombre1 - $nombre2 = ";
        echo $nombre1 - $nombre2; 
        echo "<br>";
        echo "$nombre1 * $nombre2 =";
        echo $nombre1 * $nombre2;
        
        echo "<br>--------------------<br>";
        
        //Guillemets simples
        echo 'Je m\'appelle '.$nom.' et je suis née en '.$annee;

       echo 'J\'habite à '.$ville.' J\'apprend le langage '.$language;
       
       echo "<br>--------------------<br>";
       $auteur = "Victor Hugo";
       $titre = "Les Misérables";
       //Le livre Les Misérables a été écrit par Victor Hugo
       echo ' le livre ' les Misérables a été écrit par Victor Hugo'

    ?>
</body>
</html>